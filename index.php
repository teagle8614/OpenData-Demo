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

</head>
<body>
  <?php
    $navPage=1;
    include "include/header.php";
  ?>
  
  <section id="mapSession" class="container-fluid pb-2">
    <div id="svgBox" class="wow fadeInUp">
      <svg version="1.1" id="map" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 5 500 510" enable-background="new 0 5 500 510" xml:space="preserve">
        <g>
          <path data-area="石門區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M233.481,67.926l-0.6,6.9l-8.101,1.3l-16.7,16.1v5.2l-9.399,6.5
            l-1.9,1.7h-2.399c-0.101-9.1-7.801-21.1-7.801-21.1s-6.1,5-2.699-5.2c3.3-10.2,0-12.7,0-12.7c-11.101-3.3-9.801,3.8-9.801,3.8
            l-1.899,0.7c-1.101-3-11.8-11.1-17.101-15c2.601-1.6,2.601-4.3,2.301-7.5c1.199,0.3,2.6,0.2,3,0.7c3.399,5,7.899,0.7,11.8,1.2
            c0.899,0.1,2.3-3,3.2-4.8c0.8-1.4,1.199-2.9,1.8-4.4c1.5,0.7,3.2,1,4.3,2c3.3,3,12.9,3.6,16.4,0.8c5.6-4.5,6.6-4.5,12.199,0.1
            c0.9,0.8,2.301,1,3.301,1.6c3.6,2,7.1,4,10.6,6c0.9,0.5,1.6,1.5,2.6,1.9c3,1.2,5.601,2.7,7.801,4.5
            C232.58,60.126,230.381,63.426,233.481,67.926z"/>
          <path data-area="金山區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M257.78,100.926h-6.898l-2.101,3.6c0,0-17.799,9.6-20.099,14.6
            c-2.2,4.9-0.7,16.2-16,26.9c-0.9-0.9-2.101-1.6-3.8-2.1c-1.4-0.4-3-3.4-2.9-5.2c0.1-3.3,1.6-6.5,2.2-9.8c1-5.6-0.3-7.7-5.8-7.7
            c-5.7,0-6.7-3.3-7.301-7.6c-0.3-1.8-0.699-3.6-1-5.4c0.2-0.9,0.301-1.9,0.301-2.9h2.399l1.9-1.7l9.399-6.5v-5.2l16.601-15.8
            l8.1-1.3l0.601-6.9c-3.101-4.5-0.9-7.8,1-9.6c6,4.7,9.699,11.3,11.899,19c0.601,2.1-0.1,4.6-0.5,6.8c-1,5.1,3.601,9.6,8.899,8.8
            c1.201-0.2,2.6,0.9,3.9,1.4C257.881,96.727,257.58,98.926,257.78,100.926z"/>
          <path data-area="萬里區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M289.68,141.626c-7.1,4.3-14.699,8-22,11.9
            c-0.1,0.1-0.299,0.3-0.4,0.3c-8.6-1-14.699,7.5-23.398,6.3c-1.4-0.2-3,1.2-6.2,2.6c0.399,0.3,0.8,0.7,1.3,1
            c-4.4,0.2-7.9,0.7-7.9,0.7l-8,4.2c-0.199-0.5-0.5-1.1-0.8-1.7c-2.7-4.9-5.399-9.9-6.7-15.2c-0.6-2.5-1.3-4.2-2.699-5.5
            c15.199-10.8,13.8-22.1,16-26.9c2.3-5,20.1-14.6,20.1-14.6l2.099-3.6h6.9c0.199,3.2,1.6,5.9,3.9,7.8
            c6.398,5.2,11.199,5.5,17.299,2.5c3.6-1.7,6.6-3.5,8.6-7c0.5-0.9,2.4-1.2,3.701-1.3c0.4,0,1.6,1.5,1.4,2
            c-0.301,1.2-1.102,2.6-2,3.1c-2.602,1.4-4.301,2.5-3.701,6.2c0.301,1.9-2,4.3-3.4,6.3c-3.398,4.6-2.199,8,3.301,10
            c2.4,0.9,5.5,2.5,6.1,4.5C293.381,136.827,291.58,140.526,289.68,141.626z"/>
          <path data-area="三芝區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M194.281,105.526c0,1-0.1,2-0.3,2.9c0-0.1,0-0.2-0.1-0.3
            c-0.5-0.2-1-0.4-1.601-0.5c-1.3,2-2.6,4-3.899,6c-3.4,5-6.801,10.1-10.4,15c-0.5,0.7-2,1-3,1c-3.5-0.2-5.4,1.3-6.7,3.8
            c-2.5-2.4-6.8-5.3-13.8-8.1c-15.9-6.5-13-18.4-13-18.4c5.4,1.5,8.2-1.3,8-4.2s1.7-4,1.7-4c1.3-8.8-12.8-7.9-12.8-7.9
            c-10.9-6.7-14-3.8-14-3.8l-8.7-4.9c0.399-1.4,0.7-2.7,1.1-4.1c2.2,0,4.5-0.1,6.8,0c9.4,0.7,9.801-3.9,12.2-10.5
            c0.5-1.3,1.101-3.2,2.2-3.7c5.1-2.6,10.3-4.9,15.6-7c0.5-0.2,1-0.4,1.4-0.7c5.3,3.9,16,12,17.1,15l1.7-0.8c0,0-1.3-7.1,9.8-3.8
            c0,0,3.301,2.5,0,12.8c-3.3,10.2,2.7,5.2,2.7,5.2S194.181,96.426,194.281,105.526z"/>
          <path data-area="汐止區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M310.58,226.126c-3.4,2.7-9.301,7.3-9.4,8.3
            c-0.199,1.3-1,10.1-9.9,8.6c-1.1-0.2-2.398-0.6-3.799-1.1l-1.701-4c0,0-5.199-0.2-9.898,2.1c-2.9,1.4-8.201,3.4-11.9,4.8
            c0.199-0.5,0.299-1.1,0.5-1.6c-2.701,0.8-5.4,2.6-7.4,2.1c-6.9-1.8-13.8-4.1-20.399-6.9c-5.8-2.4-6.5-6.8-2.5-11.9
            c1.399-1.9,2.899-3.1,0.2-5.3c-0.801-0.7-0.801-3.4-0.2-4.9c1.6-3.8,3.7-7.4,5.5-11.2c0.399-0.9,0.8-2.4,0.399-3
            c-2-3-3.899-6.3-6.699-8.3c-3.9-2.9-8.7-4.7-13-7.1c-0.9-0.5-2.2-1.6-2.2-2.5c0.2-3.6-0.5-7.5,3.3-10.2c2.2-1.6,2.4-3.5,1.6-5.6
            l8-4.2c0,0,3.5-0.4,7.9-0.7c3.3,2.5,5.8,4.4,8.3,6.4c1.5,1.1,3.601,2.1,4.101,3.7c2,5.9,3.5,11.9,5.199,17.9
            c0.199,0.8,0.199,1.8,0.6,2.5c3.6,5.7,11.801,9.8,19.201,9.6c1.6,7.2,9.299,13.3,17.6,13.4c3.398,0,5.398,0.9,7.6,3.9
            c0.9,1.3,2.4,2.3,4,3.1C307.18,224.926,308.981,225.526,310.58,226.126z"/>
          <path data-area="淡水區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M168.481,133.426c-0.3,0.7-0.7,1.5-0.9,2.3
            c-0.5,1.6-2.1,4-3.5,4.1c-2.8,0.3-5.699-0.6-9.3-1.1c-1.899,2.2-4.899,5.3-7.6,8.7c-3.8,4.8-6.7,10.7-11.4,14.3
            c-5.3,4-7.899,9.3-10.1,14.8c-9.2-10.5-4.8-13.8-10.4-24.4c-4.399-8.3-16.1-13.2-22.3-15.3c0-1.1-0.3-2.4-0.6-3.5
            c-0.601-2.2-1.9-4.2-2.801-6.3c0.601,0.1,1.301,0.2,1.9,0.3c1.3-2.3,2.3-4.9,4-7c4.3-5.2,5.2-12.7,12.3-16.3
            c2.5-1.3,3.5-6.1,4.7-9.5c1.3-4,2.3-8.1,3.5-12.4l8.7,4.9c0,0,3.1-2.9,14,3.8c0,0,14-0.8,12.8,7.9c0,0-1.9,1-1.7,4
            c0.2,2.9-2.5,5.6-8,4.2c0,0-2.899,11.9,13,18.4C161.681,128.126,165.981,131.026,168.481,133.426z"/>
          <path data-area="八里區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M125.58,176.426c-0.399,1-0.8,2-1.199,3
            c-0.4,0.9-0.5,1.9-0.601,3.1c-4.5-3.8-18.899-15.3-24.6-13.3c-6.9,2.5-8.5,7.1-8.5,7.1s-11.101-4.7-6.3,8c-2.101,4,1.3,12,1.3,12
            l-7.8,10.5c-4.7-7.5,0.3-5.3,1.3-6.9c0.899-1.6-1.601-15.4-6.9-18.5c-3.7-2.2-9.899-11.7-13.2-17.2c0.801-0.5,1.5-0.9,2.301-1.4
            c3.3-2.2,7.3-3.4,11.1-4.7c3.7-1.3,6.8-2.9,8.3-6.8c0.601-1.5,2.2-2.5,3.4-3.8c2.8-3,5.899-5.9,8.399-9.2c0.301-0.4,0.4-1,0.4-1.7
            c6.2,2.1,18,7,22.3,15.3C120.781,162.626,116.481,165.926,125.58,176.426z"/>
          <path data-area="林口區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M93.481,207.227c0,0-1.3,1.9-8.8-2.2l2.5,5.6l-0.5,0.1l-3.5,0.8
            c0,0,6.2,6.9,1.899,9.1c0,0-6.899-7.2-11-6.3c-4.1,0.9-4.6-6.8-6.3-1.3c-1.5,4.7,5.2,3.4,2.4,7.8c-1.3-0.7-2.7-1.5-4.101-2.3
            c-1.1,2.3-2.8,2.8-5.699,0.9c-1.601-1.1-4-1.3-6.101-1.5c-3.5-0.3-5.899-1.3-5.6-5.7h-7.3c-0.2-0.3-0.4-0.6-0.601-0.9
            c1.9-1.6,3.9-3.1,5.8-4.7c0-0.4,0.101-0.8,0.101-1.2c-8,0.8-12.3-7.1-20.5-7.1c-3.8,0-7.4-4.2-11.3-6.2c-3-1.5-6.2-2.6-9.4-3.4
            c-2.9-0.8-4.5-2.1-4.1-5.2c0.3-2.7,0.1-5.6,4.399-5.5c1.8,0,3.601-1.9,5.5-2.8c1.3-0.6,2.7-1.1,4.101-1.2
            c4.1-0.2,8.3-0.1,12.399-0.2c0.601,0,1.2-0.2,1.9-0.2c11.1,0.7,20.3-4,29.3-9.7c3.4,5.6,9.5,15.1,13.3,17.2
            c5.3,3.1,7.8,16.9,6.9,18.5c-0.9,1.6-6-0.6-1.3,6.9l7.8-10.5c0,0-3.3-8-1.3-12c0.1,0.3,0.199,0.6,0.3,0.9l6,7.8
            c0,0,0.3,10.3,1.6,12.2C93.481,207.227,93.481,207.227,93.481,207.227z"/>
          <path data-area="五股區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M130.781,211.526c-0.899,1.8-1.7,3.8-2.1,5.5
            c-3.4-2.1-7.4-1.8-8.9,1.7c-0.7,1.6-1.899,2-3.2,2.2c-0.699-2.1-3.3-4.9-3.3-4.9c-4,1.1-7.6,1.9-10.2,0c-2.6-1.9-8.3-1.3-8.3-1.3
            l-8.1-4l0.5-0.1l-2.5-5.6c7.5,4.1,8.8,2.2,8.8,2.2s0,0-1.3-1.9c-1.3-1.9-1.601-12.2-1.601-12.2l-6-7.8c-0.1-0.3-0.199-0.6-0.3-0.9
            c-4.8-12.7,6.3-8,6.3-8s1.601-4.6,8.5-7.1c5.801-2.1,20.101,9.5,24.601,13.3c-0.101,2.2,0.3,4.7,1.399,6c0.2,0.2,0.4,0.4,0.601,0.6
            c-3.5,5.9-6.5,14.9-6.5,14.9C124.781,209.026,128.381,211.126,130.781,211.526z"/>
          <path data-area="蘆洲區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M146.881,196.126c-2.801,2.9-7.4,7.8-9.5,10.7
            c-1.801,2.6-3.101,5.2-6.601,4.6c-2.5-0.4-6-2.5-11.6-7.5c0,0,3-9,6.6-14.9c2.8,3,6.8,4.6,11.601,3c2-0.6,5.399-0.1,6.8,1.3
            C145.08,194.327,145.981,195.227,146.881,196.126z"/>
          <path data-area="三重區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M157.881,223.126c-1.2,7-3.301,11.2-9.4,13.9
            c-1.3,0.6-2.3,1.2-3.1,2c-3.2-1.6-7.7-3.3-11.101-2c-2,0.7-3.899,1.2-5.899,1.7c0-6.7,0-16.5,0-19.5c0-0.6,0.1-1.3,0.3-2
            c0.399-1.7,1.2-3.7,2.1-5.5c3.4,0.6,4.7-2.1,6.601-4.6c2.1-2.9,6.699-7.8,9.5-10.7
            C153.981,203.327,159.881,210.926,157.881,223.126z"/>
          <path data-area="泰山區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M116.681,220.926c-2.4,0.3-5-0.4-5.2,3.5
            c-0.3,6-0.6,15.9-2.8,13.9s-6.9-0.4-8.5,4.1c-1.601,4.5-2.3,4.5-3.2,4.8c-0.9,0.3-5.1-2.3-6.5-9c-0.9-4.3-5.5-5.1-8.7-5.1
            c0.5-1.3,0.4-2.9,0.5-3.9c-2.6-0.5-5.7-0.8-8.5-1.8c-0.7-0.3-0.399-3-0.6-4.8c-0.9-0.5-1.9-1.1-3-1.6c2.8-4.3-3.9-3.1-2.4-7.8
            c1.7-5.5,2.2,2.2,6.3,1.3c4.101-0.9,11,6.3,11,6.3c4.4-2.2-1.899-9.1-1.899-9.1l3.5-0.8l8.1,4c0,0,5.601-0.5,8.3,1.4
            c2.601,1.9,6.301,1.1,10.2,0C113.381,216.126,115.981,218.827,116.681,220.926z"/>
          <path data-area="新莊區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M128.381,219.126c-0.101,3,0,12.9,0,19.5c-3.9,1-7.7,2.3-10.4,6.5
            c-4.1,6.3-9.4,18.801-11,20.702c-0.2,0.3-0.4,0.7-0.7,1.2c-2.1-3.2-5.8-8.602-9.1-11.402c-3.101-2.7-7.7-3.3-10.7-3.4
            c-0.2-0.3-0.3-0.6-0.4-0.8c-1.899-3.4-5.399-6.5-2.5-10.9c-5.6-2-5.5-2.1-2.199-6.5c0.199-0.3,0.3-0.6,0.399-0.9
            c3.2,0,7.8,0.8,8.7,5.1c1.4,6.7,5.5,9.3,6.5,9c0.9-0.3,1.6-0.3,3.2-4.8c1.6-4.5,6.3-6.1,8.5-4.1s2.5-7.9,2.8-13.9
            c0.2-3.8,2.8-3.2,5.2-3.5c1.3-0.1,2.5-0.6,3.2-2.2c1.5-3.5,5.5-3.8,8.899-1.7C128.481,217.827,128.381,218.526,128.381,219.126z"/>
          <path data-area="板橋區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M144.381,255.226c0.1,0.301,0.199,0.7,0.3,1
            c-5.2,1.9-18.2,7.402-17.4,13.302c0.3,1.899,0.8,3.1,1.4,3.8c-1.2,1.899-3.9,3.8-8.9-2l-1.6,2.399l-7.9,0.801c0,0-1.3,9.6-7.1,13.3
            h-0.101c-3.1-0.8-4.1-10.8-1.899-10.4c1.899,0.4,3.6-7.2,5-10.5c0.2-0.5,0.5-0.899,0.7-1.2c1.6-1.899,6.899-14.401,11-20.701
            c2.699-4.2,6.5-5.4,10.399-6.5c2-0.5,3.9-1,5.9-1.7c3.399-1.3,7.899,0.4,11.1,2c-2.399,2.1-2.8,4.9-2.5,8.1
            C143.08,249.827,143.58,252.626,144.381,255.226z"/>
          <path data-area="樹林區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M103.181,287.928h0.1c-1.1,0.7-2.399,1.2-3.8,1.3
            c0,0-5.5,5.601-11.3,5.5c0,0-0.5,5.4,0,10.2c-3.3,2.601-6.2,5-6.2,5l-3.8-1.6c0,0-5.9,2.1-10.4,0c-3-1.4-8.5-1.9-11.7-2l0,0
            c0.101-0.2,0.101-0.4,0.2-0.7c0.2-0.7,0.3-1.3,0.7-2.1c1.5-3,9.2-4.301,10.4-5.5l0.1-0.101c0,0,0.1-0.1,0.1-0.2
            c0-0.1,0-0.1,0.101-0.199c0-0.101,0.1-0.301,0.1-0.5c0.101-0.7,0.101-1.7,0-2.601c0-0.2,0-0.399,0-0.7c0-0.199,0-0.399-0.1-0.6
            c0-0.3-0.101-0.5-0.101-0.7c0-0.3-0.1-0.5-0.1-0.5c-0.4-0.2-0.8-0.399-1.2-0.6c-0.399-0.2-0.7-0.4-1.1-0.601
            c-0.3-0.199-0.7-0.399-1-0.6c-0.601-0.4-1.2-0.8-1.7-1.2c-0.4-0.3-0.8-0.6-1.1-0.899c-0.2-0.2-0.5-0.4-0.7-0.601
            c-1.8-1.6-2.8-3.2-3.3-4.6c4.199-0.5,8.1-2.5,12-4.8c0.6-0.4,1.199-1,1.3-1.601c1.2-6.2,2.5-7,7.7-4.399c1.8-1.5,3.5-3,5.5-4.7
            c-2.2-3.8-4.5-7.602-7.4-12.501c3.4,0,5.7,0.1,7.9-0.1c0.899-0.1,2-0.6,2.5-1.3c0.199-0.3-0.101-0.9-0.5-1.6
            c3,0.1,7.6,0.7,10.699,3.399c3.301,2.801,7,8.302,9.101,11.501c-1.4,3.301-3.101,10.9-5,10.5
            C99.181,277.128,100.08,287.128,103.181,287.928z"/>
          <path data-area="永和區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M175.58,263.928c-0.1-0.3-0.1-0.6-0.199-0.8
            c-0.101-0.3-0.2-0.5-0.4-0.8c-0.1-0.3-0.3-0.5-0.5-0.8c-0.1-0.101-0.2-0.301-0.3-0.4c-0.2-0.3-0.4-0.5-0.7-0.8
            c-0.5-0.501-1.1-1.001-1.7-1.501c-0.5-0.4-1-0.7-1.5-1.101c-1.399-1.199-2.8-2.5-4.2-3.8c-3.5-3.4-6.199-3.5-9.8-0.3
            c-1,0.9-1.899,2-2.8,3c-0.3,0.3-0.6,0.6-0.9,0.8c-0.3,0.3-0.6,0.5-1,0.7c-0.1,0.1-0.3,0.2-0.399,0.3c-0.2,0.101-0.3,0.2-0.5,0.2
            c-0.3,0.1-0.7,0.3-1.101,0.4c0.4,0.399,0.9,0.899,1.4,1.301c0.4,0.3,0.8,0.701,1.2,1c0.2,0.1,0.399,0.3,0.5,0.399
            c1,0.601,2,1.101,3,1.301c0.2,0,0.3,0.1,0.5,0.1c0.1,0,0.3,0,0.399,0c0.101,0,0.101,0,0.101,0h0.1c1.2-0.1,2.101-0.1,2.8,0
            c0.101,0,0.2,0,0.301,0c0.199,0,0.399,0.1,0.5,0.1c0.3,0.101,0.6,0.301,0.8,0.5c0.1,0.101,0.2,0.2,0.2,0.301
            c0.1,0.1,0.1,0.199,0.1,0.3c0,0.1,0,0.1,0,0.2c0.1,0.399,0.1,0.8,0,1.399c0,0.3-0.1,0.5-0.1,0.8c-0.101,0.601-0.301,1.4-0.601,2.2
            c-0.2,0.7-0.3,1.2-0.3,1.5c0,0.2,0,0.3,0.1,0.4c0.9,0.399,5.4-5.5,9.601-3.3c1.399,0.699,2.7,1.3,4,1.699
            c0.1-0.199,0.2-0.399,0.3-0.5C175.681,266.928,175.881,265.428,175.58,263.928z"/>
          <path data-area="中和區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M173.881,270.528c-1.101,1.699-2.101,3.5-3.2,5.199
            c0.1,0.301,0.1,0.7,0.2,1l-3.2,2.9c0,0-3.3-7.5-7.101,3.5c0,0-11.8,8-23.699,11.9c0.199-0.5,0.5-1.101,1-1.7
            c2.899-3.5-3.5-12.9-3.5-12.9c5-8-0.801-6.3-0.801-6.3s-2.8,1.5-4.6-0.8c-0.6-0.8-1.2-2-1.4-3.8c-0.8-5.9,12.2-11.402,17.4-13.302
            c0.5,1.301,1.2,2.601,2,2.9c0.7,0.2,1.7,0.2,2.6,0c0.101,0,0.2,0,0.2-0.1c0.101,0,0.2,0,0.2-0.101l0,0c0.4,0.4,0.9,0.9,1.4,1.301
            c0.399,0.301,0.8,0.701,1.199,1c0.2,0.101,0.4,0.301,0.5,0.4c1,0.6,2,1.1,3,1.3c0.2,0,0.301,0.101,0.5,0.101c0.101,0,0.301,0,0.4,0
            s0.1,0,0.1,0h0.101c1.2,0,2.1-0.101,2.8,0c0.1,0,0.2,0,0.3,0c0.2,0,0.4,0.1,0.5,0.1c0.3,0.1,0.601,0.3,0.8,0.5
            c0.101,0.1,0.2,0.2,0.2,0.3c0.101,0.101,0.101,0.2,0.101,0.3c0,0.101,0,0.101,0,0.2c0.1,0.4,0.1,0.8,0,1.4
            c0,0.3-0.101,0.5-0.101,0.8c-0.1,0.6-0.3,1.4-0.6,2.2c-0.2,0.7-0.3,1.2-0.3,1.5c0,0.2,0,0.3,0.1,0.399c0.9,0.4,5.4-5.5,9.6-3.3
            c1.4,0.7,2.7,1.3,4,1.7l0,0C174.381,269.628,174.181,270.028,173.881,270.528z"/>
          <path data-area="土城區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M137.781,293.428c-0.5,0.601-0.8,1.2-1,1.7
            c-1.1,0.4-2.3,0.7-3.399,1c0,0-4.4,8.3-11.301,11.7v0.7c-10,1-9.6,8.399-10.3,7c-0.8-1.601-6.899-3.7-6.899-3.7
            c-6.301,5.2-10.5,2.399-14.2,0c-1.4-0.9-2.101-3.7-2.4-6.8c-0.5-4.801,0-10.2,0-10.2c5.8,0.1,11.3-5.5,11.3-5.5
            c1.5-0.2,2.7-0.7,3.801-1.3c5.8-3.7,7.1-13.301,7.1-13.301l7.9-0.8l1.6-2.399c5,5.8,7.6,3.899,8.9,2c1.899,2.3,4.6,0.8,4.6,0.8
            s5.9-1.7,0.8,6.3C134.281,280.428,140.681,289.828,137.781,293.428z"/>
          <path data-area="新店區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M227.681,301.528c-0.601,2.1-2.8,6.8-2.8,6.8s-2.601-2-3.5,1.8
            c-0.9,3.8-7.101,14.4-2.7,23.6c0,0,1.7,4-5.2,0c0,0-7.1,3.301-11.1,4.2c-4,0.8-5,1.3,3.1,8.4c0,0-4.6,9.3-0.9,16.5
            c-4.6-2.4-8.3-4.5-8.3-4.5c-1.3-9.4-13.2-7.5-13.2-7.5c-9.399-3.8-13.8,5.6-13.8,5.6c-20.7,6.9-24.8,14.101-24.8,14.101l0.5,1.8
            c-4.1-0.7-8.8-2.4-8.8-2.4c1-5.399-4.2-10.7-4.2-10.7l4.4-4.8c-1.9-4,6.699-13,6.699-13c4.4-17.3-5.6-20.1-11.899-20.3
            s-9.2-4.6-9.2-4.6v-8.801c6.9-3.3,11.3-11.699,11.3-11.699c1.101-0.301,2.3-0.601,3.4-1c11.899-3.9,23.7-11.9,23.7-11.9
            c3.8-11.1,7.1-3.5,7.1-3.5l3.2-2.9c0.1,0.4,0.2,0.801,0.2,1.301c4.199-8.101,6.8-2.4,9.899-0.801c2.3,1.2,4.5,2.7,6.5,3.9
            c1.4,3.1,3.101,6.5,4.601,9.9c1.699,3.699,4.3,4.8,8.3,3.8c2.3-0.601,4.899-0.4,7.3,0c4.1,0.7,8.1,1.899,12.1,2.5
            c1.101,0.2,2.4-0.601,3.5-1.101c1-0.399,2-0.8,3-1.3C227.08,296.928,228.08,300.128,227.681,301.528z"/>
          <path data-area="鶯歌區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M67.881,297.228c0,0.2-0.101,0.4-0.101,0.5
            c0,0.101,0,0.101-0.1,0.2c0,0.101-0.101,0.101-0.101,0.2c0,0,0,0.1-0.1,0.1c-1.2,1.2-8.9,2.5-10.4,5.5
            c-0.399,0.801-0.6,1.5-0.699,2.101c-0.101,0.2-0.101,0.399-0.2,0.7l0,0c-0.101,0.199-0.101,0.399-0.2,0.6c-0.2,0.4-0.4,0.9-0.8,1.5
            c-0.4,0.6-1,1.3-1.8,2.1c-0.2,0.2-0.4,0.4-0.601,0.601c-0.399,0.399-0.899,0.8-1.399,1.3c-0.301,0.2-0.601,0.5-0.9,0.7
            c-0.4,0.399-0.9,0.8-1.4,1.2c-6,4.699-7.1,6.5-12.3,7.3c-3.6-1.7-7.1-3.3-10.6-4.9c-2.9-1.3-2.4-3-0.5-4.5c2.2-1.6,4.7-2.7,6.2-3.5
            c0.6-3.7,1.199-7,1.5-10.2c0.199-2.1-0.2-4.3-0.5-6.5c-0.301-2.3-0.9-4.5-1.2-6.8c-0.5-4,0.7-5.7,4.899-3.8
            c0.5,0.3,1.5,0.6,1.801,0.4c3.8-3.7,7.8-0.801,11.199,0.399c2.9,1,5.601,1.3,8.2,1c0.5,1.4,1.5,3,3.3,4.601
            c0.2,0.199,0.4,0.399,0.7,0.6c0.3,0.3,0.7,0.6,1.101,0.9c0.5,0.399,1.1,0.8,1.699,1.199c0.301,0.2,0.7,0.4,1,0.601
            c0.301,0.2,0.7,0.399,1.101,0.6c0.399,0.2,0.8,0.4,1.2,0.601c0,0,0,0.199,0.1,0.5c0,0.199,0.1,0.5,0.1,0.699
            c0,0.2,0,0.4,0.101,0.601c0,0.2,0,0.399,0,0.7C67.881,295.528,67.981,296.528,67.881,297.228z"/>
          <path data-area="三峽區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M141.181,403.728c-2.2,4.7-8.2,1.9-8.2,1.9v3.8
            c-9.4-0.6-13.8,13.5-13.8,13.5l-3,1.601c-5.601-1.801-7.7-4.9-8.7-11.301c-0.3-2.199-1.8-4.3-3.1-6.199
            c-1.7-2.5-3.7-4.801-6.4-8.301c-2.4-0.199-5-1.5-5.8-6.6c-0.4-2.5-4.5-5.5-7.5-6.2c-4.4-1-9.5-2.1-13.3,2.8
            c-1,1.301-3.601,2.301-5.301,2c-4.5-0.6-9.1-1.6-13.5-3c-4.399-1.399-8.699-3.5-13.5-5.5c2.301-5.3,9.5-0.899,13.4-5.5
            c-1.6-1.3-3-2.899-4.8-3.6c-3.4-1.4-4.101-3.1-1.8-6.1c0.6-0.9,1.5-1.601,2.3-2.4c0.7-0.8,1.399-1.6,1.8-2.1
            c-5.2-5.801-10.2-11.5-15.4-17.4c-1.199-0.3-3.899-0.3-5.5-1.6c-0.899-0.7,0-3.601,0-5.4c0-1.3,0.2-3-0.5-4
            c-3.5-5.3-1.6-9.8,4.5-10.8c1.601-0.3,3.301-0.601,5-1c-0.5-0.3-1-0.5-1.6-0.7c5.2-0.8,6.3-2.6,12.3-7.3c0.5-0.4,1-0.8,1.4-1.2
            c0.3-0.2,0.6-0.5,0.899-0.7c0.5-0.5,1-0.899,1.4-1.3c0.2-0.2,0.4-0.4,0.6-0.6c0.801-0.801,1.4-1.5,1.801-2.101
            c0.399-0.5,0.6-1,0.8-1.5c0.1-0.2,0.2-0.399,0.2-0.6l0,0l0,0c3.199,0.1,8.699,0.6,11.699,2c4.5,2.1,10.4,0,10.4,0l3.8,1.6
            c0,0,2.9-2.399,6.2-5c0.3,3.101,1,5.9,2.4,6.8c3.699,2.4,7.899,5.2,14.199,0c0,0,6.101,2.101,6.9,3.7c0.8,1.4,0.3-6,10.3-7v8.101
            c0,0,2.9,4.399,9.2,4.6s16.3,2.9,11.9,20.3c0,0-8.601,9-6.7,13l-4.4,4.8c0,0,5.2,5.2,4.2,10.7c0,0,4.7,1.7,8.8,2.4l4.2,14.2
            C134.281,398.728,143.281,399.028,141.181,403.728z"/>
          <path data-area="瑞芳區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M435.18,180.227c-3.801-0.9-9-1.2-12.801,1.6
            c0,0-2.699,4.4-1.898,9.8l-2.102,2.5c0,0-4-3.5-10.898,4c0,0-0.102,0-0.301-0.1c-2-0.5-12.801-3.3-14.5-1.8
            c-1.9,1.7-11.1,14.2-11.1,14.2s-10.701,3.6-2.9,22.4l1,1l-1.5,1.7c0,0-8-1.3-11.199-1.1l-3.201-4.1c0.4-10.2-5.4-5.2-5.4-5.2
            c-2.299,0.2-0.799-8.4-1.898-9.4c-1-1-2.701-5.2-5.801-5.2c-2.1,0-8.199,2.3-12.1,3.9c-0.301-1.7-1.6-3.3-4.1-4.8
            c-5.701-3.2-7-6-5.701-11.7c1.301-5.7-0.299-9.7-5.6-13.1c3.5-0.9,6.699-1.6,9.9-2.5c0.799-0.2,1.5-0.9,2.1-1.6
            c3.199-4.1,7.1-4.1,10.9-0.4c1.5,1.4,3.6,2.2,5.699,3.5c0.6-2.9,1-5.1,1.4-7.4c5.9-0.8,6.9-3.2,4.1-10h13.701
            c-0.301,1.1-1,2.6-1.102,4.1c-0.1,1.4,0.602,2.8,0.9,4.2c1.201-0.5,2.301-1.1,3.5-1.3c3.9-0.6,7.801-1.6,11.701-1.4
            c5,0.3,10.299,3.4,14.699,2.3c7.1-1.8,12.9,3.3,19.4,2.1c4-0.7,7.9-2,11.799-3.3c2.9-1,5.701-2.3,9.102-3.7
            C441.08,174.827,438.08,177.526,435.18,180.227z"/>
          <path data-area="貢寮區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M498.68,258.426c-1.1,4.202-2.6,7.501-7.5,9.801
            c-6.699,3.101-12.6,8-18.9,12.101c-1,0.7-2.9,1.6-3.6,1.1c-7.1-4.899-13.6-1.399-20.1,1.3c-4.801,2.101-9.6,3.7-15,4.101
            c-3.801,0.3-8,3.2-10.9,6c-3.1,3-5.9,4.7-10.199,4.3c-1.9-0.2-3.801,0.7-5.801,0.8c-2.9,0.2-5.9,0.8-8.6,0.2
            c-0.301-0.1-0.6-0.1-1-0.2c-0.6-3.3-1.801-7.5-1.701-10.2c0.201-4.399,11.801-19.6,11.801-19.6
            c-1.4-9.801,9.301-10.001,9.301-10.001l2.5-10.9c6.1-12.1-0.801-12.1-0.801-12.1s-9-17.8-8.4-22.4s-0.799-7.7-2.1-10.7
            c-0.5-1.1-0.6-2.8-0.6-4.3c0.199,0,0.299,0.1,0.299,0.1c6.9-7.5,10.9-4,10.9-4l2.1-2.5c-0.799-5.4,1.9-9.8,1.9-9.8
            c3.801-2.8,9-2.5,12.801-1.6c-0.701,0.7-1.5,1.4-2.201,2.1c2.102,1,3.801,1.3,4.701,2.3c1.1,1.4,2.6,3.8,2.1,5.1
            c-1.199,3.6-3.6,6.7-4.9,10.2c-0.799,2.1-1.5,5.1-0.5,6.7c2.4,4,5.9,7.3,8.801,10.9c0.9,1.1,2.1,2.4,2.199,3.6
            c0.201,3.1,0.301,6.4-0.4,9.3c-2,8.1,2.201,13.8,7,19c1.801,1.9,4.201,2.8,7.9,1.9c6.9-1.6,14.301-1.8,21.5-1.3
            c2.5,0.2,4.801,4.2,7.701,6.9c0.6-0.5,1.799-1.6,3.5-3C494.28,255.327,496.28,256.827,498.68,258.426z"/>
          <path data-area="雙溪區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M418.18,235.426c0,0-9-17.8-8.4-22.4s-0.799-7.7-2.1-10.7
            c-0.5-1.1-0.6-2.8-0.6-4.3c-2-0.5-12.801-3.3-14.5-1.8c-1.9,1.7-11.1,14.2-11.1,14.2s-10.701,3.6-2.9,22.4l1,1l-1.4,1.7
            c0,0-8-1.3-11.199-1.1c-0.701,0-1.201,0.1-1.301,0.3c-0.801,1-8.4,11.3-8.4,11.3s-6.699-2.1-18.6,20.102l-2.5,2.5
            c0,0-9.4,1.2,1.301,9c0.398,0.3,0.699,0.5,1.1,0.8c4.9,3.601,6.6,4.9,7.1,5.3l3.699-0.8c0,0,1.9,7.9,0.801,10.2
            c-1,2.3-2.5,3.3,0.801,11.7c0,0-4,4-4.201,13.2l-6.1,10.399c0,0,2.301,3.101,4.6,10.3c1.301,4.101,4.301,4.9,6.701,6.7
            c0.299-0.1,0.6-0.2,0.799-0.2c4.1-0.6,7.4-2.399,11-3.8c0.5-0.2,1.301,0.7,2,1c0.801,0.3,1.9,0.9,2.6,0.7
            c5.801-1.8,12.201-2.5,14.9-9.5c0.801-2,2.4-3.6,3.9-5.2c3.9-4.2,4.1-5.7,0.699-10.3c-1.199-1.6-3.1-2.9-3.799-4.7
            c-1-2.399-2.1-5.3-1.4-7.6c1.199-4.601,9.1-8.101,14.301-7.601c-0.602-3.3-1.801-7.5-1.701-10.199
            c0.201-4.4,11.801-19.601,11.801-19.601c-1.4-9.801,9.299-10.001,9.299-10.001l2.5-10.9
            C425.08,235.426,418.18,235.426,418.18,235.426z"/>
          <path data-area="平溪區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M367.08,234.426c-0.701,0-1.201,0.1-1.301,0.3
            c-0.799,1-8.4,11.3-8.4,11.3s-6.699-2.1-18.6,20.102l-2.5,2.5c0,0-9.4,1.2,1.301,9c0.4,0.3,0.699,0.5,1.1,0.8
            c-0.1,3.101-0.699,6.5-3.4,6c-4.6-0.899-15.299,3.601-15.299,3.601c-10-6.101-9.9-0.7-11.4,0c-0.9,0.399-5.301,0.3-8.801,0.199
            l0.4-3.899c7.1-6.5,5.6-10.9,5.6-10.9c-4.199-2.5-2.299-6.5-3.5-9.6c-1.299-3.101-2.9,2.5-5.6,0s-8.1-7.902-8.1-7.902s0,0,2.5-5.4
            c1.1-2.4,0.9-5,0.301-7.2c8.898,1.5,9.799-7.3,9.998-8.6c0.102-1,6-5.7,9.4-8.3c4.6,1.6,8.9,0.8,13.201-2.4
            c1.699-1.3,5.199-0.2,7.5-0.2c1.5-1.3,3.1-2.5,4.6-3.8c2-1.8,2.9-3.6,2.699-5.3c3.9-1.5,10-3.9,12.1-3.9
            c3.102,0,4.801,4.2,5.801,5.2c1.1,1-0.4,9.6,1.9,9.4c0,0,5.9-5,5.4,5.2L367.08,234.426z"/>
          <path data-area="深坑區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M249.981,268.628c0,0-0.1-1.3,0-9.101c0-3.5-1.901-6.3-4.1-8.4
            c-0.101-0.1-0.2-0.2-0.301-0.3c-0.8-0.7-1.5-1.3-2.3-1.8c-1,0.3-1.899,0.9-2.3,1.6c-0.1,0.2-0.2,0.3-0.3,0.5
            c-0.3,0.5-0.7,0.9-1,1.2c-2.601,2.7-5.8,2.6-9.2,0.7c-5.3-2.9-7.8,1.1-10.8,3.8c-0.101,0.1-0.3,0.2-0.4,0.399
            c-0.3,0.4-0.6,0.7-0.8,1.101c-0.7,1.5-0.1,3.001,0.5,4.601c0.1,0.2,0.2,0.4,0.3,0.601c0,0.1,0.101,0.199,0.101,0.3
            c0.1,0.3,0.199,0.7,0.3,1c0.1,0.399,0.2,0.8,0.3,1.3s0.2,0.9,0.2,1.3c0.1,0.7,0.1,1.3,0.2,2c0,0.2,0,0.5,0,0.7c0,1.3,0,2.7,0,4
            c0,0.5,0,0.9,0,1.3c0,0.2,0,0.5,0,0.7c0,0.9,0.1,1.7,0.1,2.6c0,0.301,0,0.7,0,1c-0.1,5.4,1.9,7.5,7.3,8.7
            c1.5,0.3,2.7,1.8,4.101,2.7c-0.4,0.3-0.7,0.6-1.101,0.9c9.7-0.7,15.601-6.5,15.601-6.5c-1.801-7-0.9-9.2-0.2-9.9
            c0.3-0.3,0.6-0.3,0.6-0.3c0.9-0.4,1.701-0.7,2.3-1.101c0.699-0.3,1.199-0.699,1.699-1c0.301-0.199,0.602-0.399,0.801-0.6
            s0.4-0.4,0.6-0.5C254.58,269.628,249.981,268.628,249.981,268.628z"/>
          <path data-area="石碇區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M300.08,284.228l-0.4,3.9l-0.4,4c0,0-7.898-2.7-12.898,4.4
            c0,0-3.9-1.7-13.5,7.699l-7.5,2.9c0,0-1.701,12.1,5.799,19.4c0,0-7.699,7.699-7.699,8.399s2.9,9.2-9.201,12.101
            c0,0-0.398,1.3,1.9,5.199c2.301,4-3.299,1.9,1.301,11.9l-5.801,11.3c-5.699-3.399-10.6-2.2-10.6-2.2l-4.399-2.5
            c0,0-9.7,0.301-17.2-1.6c-3.9-1-10-3.9-14.9-6.5c-3.699-7.2,0.9-16.5,0.9-16.5c-8.1-7.1-7.1-7.5-3.1-8.4
            c4-0.8,11.1-4.199,11.1-4.199c6.9,4,5.2,0,5.2,0c-4.4-9.2,1.899-19.9,2.7-23.601c0.8-3.7,3.5-1.8,3.5-1.8s2.199-4.7,2.8-6.8
            c0.399-1.4-0.601-4.601-1.3-6.5c0.6-0.3,1.1-0.5,1.699-0.9c1-0.6,1.801-1.399,2.7-2.1c9.7-0.7,15.601-6.5,15.601-6.5
            c-1.801-7-0.9-9.2-0.2-9.9c0.3-0.3,0.6-0.3,0.6-0.3c0.9-0.4,1.701-0.7,2.3-1.1c0.699-0.301,1.199-0.7,1.699-1
            c0.301-0.2,0.602-0.4,0.801-0.601s0.4-0.399,0.6-0.5c2.4-2.5-2.199-3.5-2.199-3.5s-0.1-1.3,0-9.101c0-3.5-1.901-6.3-4.1-8.4
            c-0.101-0.1-0.2-0.2-0.301-0.3c-0.8-0.7-1.5-1.3-2.3-1.8c0.5-0.2,1.101-0.3,1.601-0.3c5.898-0.2,11.799-0.1,17.898-0.1
            c0.301-1.1,0.701-2.4,1-3.8c3.701-1.4,9-3.4,11.9-4.8c4.701-2.3,9.9-2.1,9.9-2.1l1.699,4c1.4,0.6,2.701,0.9,3.801,1.1
            c0.6,2.2,0.801,4.9-0.301,7.2c-2.5,5.4-2.5,5.4-2.5,5.4s5.4,5.402,8.102,7.902c2.699,2.5,4.398-3.101,5.6,0
            c1.299,3.1-0.602,7.1,3.6,9.6C305.78,273.328,307.28,277.728,300.08,284.228z"/>
          <path data-area="坪林區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M352.379,345.328c-2.398-1.8-5.398-2.601-6.699-6.7
            c-2.301-7.1-4.6-10.3-4.6-10.3l6.1-10.4c0.199-9.2,4.199-13.2,4.199-13.2c-3.299-8.399-1.898-9.399-0.799-11.699
            c1.1-2.301-0.801-10.2-0.801-10.2l-3.699,0.8c-0.5-0.4-2.201-1.7-7.1-5.3c-0.102,3.1-0.701,6.5-3.4,6
            c-4.6-0.9-15.301,3.6-15.301,3.6c-10-6.1-9.9-0.7-11.4,0c-0.898,0.4-5.299,0.3-8.799,0.2l-0.4,4c0,0-7.9-2.7-12.9,4.4
            c0,0-3.898-1.7-13.5,7.699l-7.5,2.9c0,0-1.699,12.1,5.801,19.4c0,0-7.699,7.699-7.699,8.399s2.898,9.2-9.201,12.101
            c0,0-0.4,1.3,1.9,5.199c2.301,4-3.301,1.9,1.301,11.9l-5.801,11.3c1.699,1,3.4,2.4,5.1,4.4c0,0,10.701,4.1,14.1,4.399
            c3.4,0.301,3.102-3.8,10.301-0.899c0,0,5.699,4.1,14.4,6.7c2.398-1.9,4.799-3.9,7.299-5.7c2.801-2,6.1-5.7,8.701-5.3
            c5.1,0.8,9.799,0,14.699-0.301c5.199-0.3,7.9-2.199,8.1-7.199c8.701-0.801,12.701-7,10.4-15.601c-0.301-1.2-0.301-3.1,0.4-3.899
            C347.58,349.728,349.78,346.328,352.379,345.328z M345.879,283.628C345.879,283.628,345.879,283.728,345.879,283.628
            C345.879,283.728,345.78,283.628,345.879,283.628L345.879,283.628z"/>
          <path data-area="烏來區" fill="#2d92ff" stroke="#fff" stroke-miterlimit="10" d="M295.58,390.028c-1.301,1-2.6,2-3.801,3
            c-2.5,2-5.799,3.399-7.6,5.899c-1.6,2.2-1.699,5.601-2.4,8.601c-13.6,1.899-27.6,3.899-40.999,5.8c-2.2,3.399-3.6,7.8-6.7,9.899
            c-3.5,2.5-8.399,3.101-12.8,4.2c-3.3,0.9-5.2,3.601-3.6,6.7c2.3,4.6,1.399,8.3-1.9,11.9c-2.8,3.1-3,6.199,0.5,9.3
            c1.101,1,1.101,3.3,1.101,5.2c1,1.699,2.6,12.6,1.199,14.699c-2.6,3.801-6.6,4-11.199,3.301c-0.9,2.699-1.801,5.399-2.801,8.3
            c-1.3-0.3-2.8-0.4-3.899-1.101c-3.9-2.199-6.601-0.899-9.3,2.2c-1.101,1.2-3.301,2.7-4.5,2.4c-4.101-1.101-5.2,1.5-5.601,4.2
            c-0.8,5.1-2.6,8.8-8.399,9.5c-0.9,0.1-1.601,1.3-2.4,1.899c-1.1,0.8-2.5,2.4-3.3,2.101c-7.8-1.9-13.8,3.3-20.601,5.1
            c-5.5,1.5-7.1,1.4-9.3-3.8c-1.6-3.7-5.3-7-3.2-11.8c0.2-0.4-0.8-1.601-1.5-2c-3.1-2-6.199-4.301-9.6-5.601
            c-6.5-2.3-7.9-8.3-10.6-13.3c-0.9-1.7-2-3.3-2.801-5c-1.3-2.6-2.5-5.2-3.6-7.8c-1.8-4.3-3.1-8.7-5.2-12.8
            c-2.8-5.7-1.5-9.7,3.9-13.301c5-3.399,9.7-7.199,12.1-13.199c-0.2,0-0.3-0.101-0.399-0.101l3-1.6c0,0,4.399-14.101,13.8-13.5v-3.8
            c0,0,6,2.8,8.1-1.9c2.2-4.7-6.899-5,8.101-17.2l-4.2-14.2l-0.5-1.699c0,0,4.1-7.2,24.8-14.101c0,0,4.4-9.399,13.8-5.6
            c0,0,11.9-1.9,13.2,7.5c0,0,3.6,2.1,8.3,4.5c5,2.6,11,5.5,14.9,6.5c7.5,1.899,17.2,1.6,17.2,1.6l4.399,2.5c0,0,4.9-1.3,10.499,2.2
            c1.701,1,3.4,2.4,5.102,4.4c0,0,10.699,4.1,14.1,4.399s3.1-3.8,10.299-0.899C281.18,383.328,286.981,387.428,295.58,390.028z"/>
        </g>
      </svg>
    </div>
    <div id="areaInfo"></div>
    <div class="tip">
      可點擊圖示上的區域快速查詢喔!
    </div>
  </section>

  <hr>

  <section id="searachSession" class=" wow fadeInUp">
    <div class="conditionBox mb-3">
      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="selectArea">選擇地區</label>
          <select id="selectArea" class="form-control">
            <option value="all" selected>全部</option>
          </select>
        </div>
      </div>  
    </div>
    <hr>

    <p class="tip2">資料約三分鐘更新一次</p>
    <p class="tip3">※剩餘汽車位若沒有顯示資料，則表示該停車場沒有提供即時空位的資訊</p>
    <div id="tableBox"></div>
    
  </section>

  <div class="btnBackUP">
    <span class="material-icons">keyboard_arrow_up</span>
  </div>


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
  <script src="js/index.js"></script>

</body>
</html>
