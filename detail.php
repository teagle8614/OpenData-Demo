<!DOCTYPE html>
<html lang="zh-TW">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="HE,SIH-YI">
  <meta name="keywords" content="新北市停車場,停車場">
  <meta name="description" content="用以搜尋臺灣新北市各個區域的停車場資料">
  <meta name="copyright" content="本網頁著作權屬HE,SIH-YI">
  <meta name="Distribution" content="Taiwan">
  <title>ntPark</title>
  <link rel="stylesheet" href="plugins/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/cr-1.5.2/fh-3.1.7/sp-1.1.1/datatables.min.css"/>
  <!-- google icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Wow.js -->
  <link rel="stylesheet" href="plugins/wow/animate.css"/>
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
  <!-- chart.js  -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-173932581-2"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-173932581-2');
  </script>


  <style>
    body{
      padding-top: 100px;
    }
    footer{
      position: fixed;
      width: 100%;
      bottom: 0;
    }
  </style>
 
</head>
<body>
  <?php 
    $navPage=0;
    include "include/header.php";
  ?>

  <section id="detailSection" class="py-5">
    <div class="row">
      <div class="col-lg-7">
        <div id="googleMap"></div>
      </div>

      <div class="col-lg-5">
        <h3 id="parkName"></h3>
        <table class="table">
          <tbody id="detailTable" >
          </tbody>
        </table>
      </div> 
    </div>

    <div class="cent mt-3">
      <a href="index.php" class="btn">返回首頁</a>
    </div>
  </section>

  <?php
    include "include/footer.php";
  ?>


<script src="js/jquery-3.5.1.min.js"></script>
  <!-- bootstrap -->
  <script src="plugins/bootstrap.bundle.min.js"></script>
  <!-- Wow.js -->
  <script src="plugins/wow/wow.min.js"></script>
  <!-- D3.js -->
  <script src="https://d3js.org/d3.v4.min.js"></script>
  <!-- Data Tables.js -->
  <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/cr-1.5.2/fh-3.1.7/sp-1.1.1/datatables.min.js"></script>
  <!-- chart.js  -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
  <script src="js/general.js"></script>


  <script>
    let pId="<?=$_GET['id']?>";
  </script>
  <script src="js/detail.js"></script>

</body>
</html>
