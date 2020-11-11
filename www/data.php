<table class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
            <td>No</td>
            <td>Kode Toko</td>
            <td>Nama Toko</td>
            <td>Domisili</td>
            <td>Alamat Toko</td>
            <!--<td>Status</td>-->
        </tr>
    </thead>
    <tbody>
        <?php
            include 'koneksi.php';
            $s_domisili="";
            $s_keyword="";
            if (isset($_POST['domisili'])) {
                $s_domisili = $_POST['domisili'];
                $s_keyword = $_POST['keyword'];
            }
            
            $search_domisili = '%'. $s_domisili .'%';
            $search_keyword = '%'. $s_keyword .'%';
            $no = 1;
            $query = "SELECT * FROM codemegazip WHERE domisili LIKE ? AND (code_toko LIKE ? OR nama_toko LIKE ? OR domisili LIKE ? OR alamat_toko LIKE ? OR status LIKE ?) ORDER BY id DESC LIMIT 100";
            $dewan1 = $db1->prepare($query);
            $dewan1->bind_param('ssssss', $search_domisili, $search_keyword, $search_keyword, $search_keyword, $search_keyword, $search_keyword);
            $dewan1->execute();
            $res1 = $dewan1->get_result();

            if ($res1->num_rows > 0) {
                while ($row = $res1->fetch_assoc()) {
                    $id = $row['id'];
                    $code_toko = $row['code_toko'];
                    $nama_toko = $row['nama_toko'];
                    $domisili = $row['domisili'];
                    $alamat_toko = $row['alamat_toko'];
                    $status = $row['status'];
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $code_toko; ?></td>
                <td><?php echo $nama_toko; ?></td>
                <td><?php echo $domisili; ?></td>
                <td><?php echo $alamat_toko; ?></td>
                <!--<td><?php //echo $status; ?></td> -->
            </tr>
        <?php } } else { ?> 
            <tr>
                <td colspan='7'>Tidak ada data ditemukan</td>
            </tr>
        <?php } ?>
    </tbody>
</table>