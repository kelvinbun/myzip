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
    /* jwpopup box style */
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
    <button><a href="index.php"><b>Kembali Kode Toko</b></a></button>
    <button><a href="javascript:void(0);" id="jwpopupLink"><b>Video Tutorial</b></a></button>
    </div>
    <div id="jwpopupBox" class="jwpopup">
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
        <small>Silahkan Bapak/Ibu bisa lihat catalog dari berbagai toko yang kami sediakan, setelah sudah check Kode Toko dan sudah memilih barang, Bapak/Ibu bisa "Klik" Submit Order untuk Proses Pengisian data &amp;<mark><b>Pastikan Bapak/Ibu sudah memiliki Aplikasi LINE</b></mark></small>
        </div>
        <div class="col-sm-3">
          <button id="search" name="search" class="btn btn-warning"><a href="http://line.me/R/oaMessage/@590tvkxb/?order"><b>Submit Order</b></a> </button>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="col-sm-4">
            
        </div>

    </div>

    <div class="data"></div>
    <div id="modal" class="modal fade" tabindex="-1" role="dialog">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header" style="text-align: left; color:#FFFFFF; background-color: #FF00FF;">
	      	<h4 class="modal-title">Mohon Perhatikan !!</h4>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>	        
	      </div>
	      <div class="modal-body">
	        <p>Perhatikan Point" di Katalog berikut ini :</p>
	        <small><p>1. Katalog di web ini adalah harga perkiraan, sewaktu" harga bisa berubah menyesuaikan harga toko yang Bapak/Ibu Tuju.</p></small>
	        <small><p>2. Jika Logo toko tidak tersedia, Bapak/Ibu bisa memperkirakan Barang & harga yang sama dengan katalog yang tersedia di web ini</p></small>	        
	        <small><p>3. Jika barang yang bapak/ibu ingin beli tidak ada di Katalog, Bapak/Ibu bisa mempekirakan barang tersebut melalui web resmi/toko online lainya, (perubahan harga akan berubah menyesuaikan harga toko yang Bapak/Ibu Tuju).</p></small>
	        <small><p>4. Pastikan Bapak/Ibu memiliki Aplikasi <mark>LINE</mark> <b>(WAJIB)</b></p></small>
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
   <script src="js/jquery.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script>
	  $('#modal').modal('show');
	</script>
  <script type="text/javascript">
    $(document).ready(function(){
        $('.data').load("datacatalog.php");
        $("#search").click(function(){
          var domisili = $("#s_domisili").val();
          var keyword = $("#s_keyword").val();
          $.ajax({
                type: 'POST',
                url: "datacatalog.php",
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