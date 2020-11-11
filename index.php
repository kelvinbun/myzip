<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="icon" href="mf.png">
	<title>m-zip</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <style>
		body{
			font-family: arial, verdana, sans-serif;
		}
		.jwpopup {
		    display: none;
		    position: fixed;
		    z-index: 1;
		    padding-top: 110px;
		    left: 0;
		    top: 0;
		    width: 100%;
		    height: 100%;
		    overflow: auto;
		    background-color: rgb(0,0,0);
		    background-color: rgba(0,0,0,0.7);
		}
		.jwpopup-content {
		    position: relative;
		    background-color: #fefefe;
		    margin: auto;
		    padding: 0;
		    max-width: 400px;
		    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
		    -webkit-animation-name: animatetop;
		    -webkit-animation-duration: 0.4s;
		    animation-name: animatetop;
		    animation-duration: 0.4s
		}

		.jwpopup-head {
			font-size: 11px;
		    padding: 1px 16px;
		    color: white;
		    background: #006faa; 
		    background: -webkit-linear-gradient(#006faa, #002c44); 
		    background: -o-linear-gradient(#006faa, #002c44); 
		    background: -moz-linear-gradient(#006faa, #002c44); 
		    background: linear-gradient(#006faa, #002c44); 
		}
		.jwpopup-main {padding: 5px 16px;}
		.jwpopup-foot {
			font-size: 12px;
		    padding: .5px 16px;
		    color: #ffffff;
		    background: #006faa; 
		    background: -webkit-linear-gradient(#006faa, #002c44); 
		    background: -o-linear-gradient(#006faa, #002c44); 
		    background: -moz-linear-gradient(#006faa, #002c44); 
		    background: linear-gradient(#006faa, #002c44); 
		}

		/* tambahkan efek animasi */
		@-webkit-keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}

		@keyframes animatetop {
		    from {top:-300px; opacity:0}
		    to {top:0; opacity:1}
		}

		.close {
			margin-top: 7px;
		    color: white;
		    float: right;
		    font-size: 28px;
		    font-weight: bold;
		}
		.close:hover, .close:focus {
		    color: #999999;
		    text-decoration: none;
		    cursor: pointer;
		}
	</style>
</head>
<body>
	<nav class="navbar navbar-dark bg-primary">
	  <a class="navbar-brand" href="index.php" style="color: #fff;">
	    KATALOG & KODE TOKO MEGAZIP
	  </a>
	</nav>
	
	<div class="container">
		<div>
		<button><a href="catalog.php"><b>Lihat Katalog</b></a></button>
		<button><a href="javascript:void(0);" id="jwpopupLink"><b>Video Tutorial</b></a></button>
		</div>
		<!--<a href="javascript:void(0);" id="jwpopupLink">
			<img src="img/tutorial.jpg" alt="Image" height="80" width="100">
		</a> 
			<a href="catalog.php">
		<img src="img/katalog.gif" alt="Image" height="60" width="100">
		</a>
			-->	
		<!--
		<a href="https://bit.ly/31Nw80B">
		<img src="img/erafone.jpg" alt="Image" height="40" width="100">
		</a>
		<a href="https://bit.ly/31Nw80B">
		<img src="img/hartono.jpg" alt="Image" height="40" width="100">
		</a> -->
		<div id="jwpopupBox" class="jwpopup">
	<!-- jwpopup content -->
			<div class="jwpopup-content">
				<div class="jwpopup-head">
					<span class="close">×</span>
					<h5>Tutorial Pengajuan Online Megazip</h5>
				</div>
				<div class="jwpopup-main">
					<div class="content-video" style="color: blue;">
				            <iframe width="370" height="317" src="https://www.youtube.com/embed/jpt2QS1DNnk" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				     </div>
				</div>
				<div class="jwpopup-foot">
					<p>Pengajuan Online ini hanya bisa melalui Aplikasi LINE</p>
				</div>
			</div>
		</div>

        <div class="row mb-3">
		    <div class="col-sm-12">
		    <small><p>Bapak/Ibu bisa langsung Klik Tombol Submit Order jika sudah mengetahui Kode Toko &amp; Harga Barang yang ingin dibeli, Untuk proses pengisian Data <mark><b>Pastikan Bapak/Ibu sudah memiliki Aplikasi LINE</b></mark></small>
		    <!--<small>Click Logo Catalog untuk melihat Product & Harga Barang, sebelum ke Katalog, Bapak/Ibu disarankan untuk mencari Toko Terdekat Sesuai Domisili anda &amp; Jika sudah tau Kode toko yang Bapak/Ibu tuju? Bapak/Ibu bisa mencatat Kode tersebut untuk keperluan proses selanjutnya, Jika Bapak/Ibu sudah paham dengan proses Pengajuan Online, Bapak/Ibu bisa langsung Klik Tombol Submit Order &amp;<mark><b>Pastikan Bapak/Ibu sudah memiliki Aplikasi LINE</b></mark></small> -->
		    </div>
		    <div class="col-sm-3">
		        <div class="form-group form-inline">
		            <label>Domisili :</label>
		            <select name="s_domisili" id="s_domisili" class="form-control">
		                <option value=""></option>
		               	<option value="balikpapan">BALIKPAPAN</option>
						<option value="bandarlampung">BANDARLAMPUNG</option>
						<option value="bandung">BANDUNG</option>
						<option value="banjarmasin">BANJARMASIN</option>
						<option value="bantul">BANTUL</option>
						<option value="batam">BATAM</option>
						<option value="bekasi">BEKASI</option>
						<option value="bogor">BOGOR</option>
						<option value="cikarang">CIKARANG</option>
						<option value="cimahi">CIMAHI</option>
						<option value="cirebon">CIREBON</option>
						<option value="denpasar">DENPASAR</option>
						<option value="depok">DEPOK</option>
						<option value="gorontalo">GORONTALO</option>
						<option value="gresik">GRESIK</option>
						<option value="jakarta">JAKARTA</option>
						<option value="jambi">JAMBI</option>
						<option value="jember">JEMBER</option>
						<option value="kalimalang">KALIMALANG</option>
						<option value="karawang">KARAWANG</option>
						<option value="kediri">KEDIRI</option>
						<option value="kotamedan">KOTAMEDAN</option>
						<option value="kupang">KUPANG</option>
						<option value="makassar">MAKASSAR</option>
						<option value="malang">MALANG</option>
						<option value="manado">MANADO</option>
						<option value="mataram">MATARAM</option>
						<option value="muarabungo">MUARABUNGO</option>
						<option value="padang">PADANG</option>
						<option value="palembang">PALEMBANG</option>
						<option value="palopo">PALOPO</option>
						<option value="palu">PALU</option>
						<option value="pangkalpinang">PANGKALPINANG</option>
						<option value="pekalongan">PEKALONGAN</option>
						<option value="pekanbaru">PEKANBARU</option>
						<option value="pontianak">PONTIANAK</option>
						<option value="rawasari">RAWASARI</option>
						<option value="samarinda">SAMARINDA</option>
						<option value="semarang">SEMARANG</option>
						<option value="serang">SERANG</option>
						<option value="serpong">SERPONG</option>
						<option value="sidoarjo">SIDOARJO</option>
						<option value="solo">SOLO</option>
						<option value="surabaya">SURABAYA</option>
						<option value="tangerang">TANGERANG</option>
						<option value="tanjung">TANJUNG</option>
						<option value="tasik">TASIK</option>
		            </select>
		        </div>
		    </div>
		    <div class="col-sm-4">
		        <div class="form-group form-inline">
		            <label>Cari Toko :</label> &nbsp;
		            <input type="text" name="s_keyword" id="s_keyword" class="form-control">
		        </div>
		    </div>
		    <div class="col-sm-4">
		        <button id="search" name="search" class="btn btn-warning"><i class="fa fa-search"></i> Cari</button>
		        <button id="search" name="search" class="btn btn-warning"><a href="http://line.me/R/oaMessage/@590tvkxb/?order"><b>Submit Order</b></a> </button>
		    </div>

		</div>

		<div class="data"></div>

	<div id="modal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="text-align: left; color:#FFFFFF; background-color: #FF0000;">
	      	<h4 class="modal-title">Mohon Perhatikan !!</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	        
	      </div>
	      <div class="modal-body">
	        <p>Sebelum mengajukan Pengajuan Kredit Online, Perhatikan Point" berikut ini :</p>
	        <small><p>1. Bapak/Ibu Wajib mengetahui <mark>Kode Toko</mark>, Carilah Toko terdekat sesuai domisili</p></small>
	        <small><p>2. Klik Tombol <mark>"Check Katalog"</mark> untuk melihat Product & Harga Barang</p></small>	        
	        <small><p>3. Klik Tombol <mark>"Submit Order"</mark> untuk Proses Pengisian Data</p></small>
	        <small><p>4. Silahkan Klik Tombol <mark>"Video Tutorial"</mark> Untuk melihat cara mengajukan online</p></small>
	        <small><p>5. Pastikan Bapak/Ibu memiliki Aplikasi <mark>LINE</mark> <b>(WAJIB)</b></p></small>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
		
    </div>
 
    <script>
	var jwpopup = document.getElementById('jwpopupBox');
	var mpLink = document.getElementById("jwpopupLink");
	var close = document.getElementsByClassName("close")[0];
	mpLink.onclick = function() {
	    jwpopup.style.display = "block";
	}
	close.onclick = function() {
	    jwpopup.style.display = "none";
	}
	window.onclick = function(event) {
	    if (event.target == jwpopup) {
	        jwpopup.style.display = "none";
	    }
	}
	</script>
    <!-- JQuery -->
    <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script>
	  $('#modal').modal('show');
	</script>
	<script type="text/javascript">
		$(document).ready(function(){
		    $('.data').load("data.php");
		    $("#search").click(function(){
		    	var domisili = $("#s_domisili").val();
		    	var keyword = $("#s_keyword").val();
		    	$.ajax({
		            type: 'POST',
		            url: "data.php",
		            data: {domisili: domisili, keyword:keyword},
		            success: function(hasil) {
		                $('.data').html(hasil);
		            }
		        });
		    });

		});
	</script>
</body>
</html>