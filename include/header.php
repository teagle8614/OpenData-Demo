<header class="navbar-dark bg-primary fixed-top shadow">
  <nav class="navbar navbar-expand-md container">
    <a class="navbar-brand" href="index.php"><img src="img/logo-white.svg" alt="">新北市停車場查詢</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav"
      aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="nav">
      <div class="navbar-nav">
        <a class="<?=($navPage==1)?'active':'';?> nav-item nav-link" id="nav_search" href="index.php">搜尋停車場</a>
        <a class="<?=($navPage==2)?'active':'';?> nav-item nav-link" id="nav_chart" href="chart.php">圖表資料</a>
      </div>
    </div>
  </nav>
</header>