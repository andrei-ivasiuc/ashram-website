<?php require_once('../header.php') ?>
<html>

<head>
  <style>
    .dropbtn {
      background-color: #6fa591;
      color: white;
      padding: 16px;
      font-size: 16px;
      border: none;
    }

    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f1f1f1;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
      z-index: 1;
    }

    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }

    .dropdown-content a:hover {
      background-color: #ddd;
    }

    .dropdown:hover .dropdown-content {
      display: block;
    }

    .dropdown:hover .dropbtn {
      background-color: #5f7187;
    }
  </style>
</head>

<body>
  <section class="sa-section" style="background-color: var(--bg-light);">
    <div class="container">
      <div class="row col-12">
        <h2 class="sm mb-4" style="text-align:center">Call Beyond</h2>
        <div class="row gx-5">
          <div class="col">
          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
              2021
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <a href="#" class="dropdown-item">January</a>
              <a href="#" class="dropdown-item">February</a>
              <a href="#" class="dropdown-item">March</a>
              <a href="#" class="dropdown-item">April</a>
              <a href="#" class="dropdown-item">May</a>
              <a href="#" class="dropdown-item">June</a>
              <a href="#" class="dropdown-item">July</a>
            </ul>
          </div>
          </div>
         

          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 mb-4 list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              2020
            </a>
            <?php include("months.php") ?>
          </div>

          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-4 mb-4 list-group">
            <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
              2019
            </a>
            <?php include("months.php") ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ARCHIVES -->

  <section class="sa-section">
    <div class="container">
      <div class="row col-12">
        <h2 class="sm mb-4" style="text-align:center">Call Beyond : Archives</h2>
        <div class="row gx-5">
          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group">
            <div class="dropdown">
              <button class="dropbtn">2018</button>
              <div class="dropdown-content">
                <?php include("months-hover.php") ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group">
            <div class="dropdown">
              <button class="dropbtn">2017</button>
              <div class="dropdown-content">
                <?php include("months-hover.php") ?>
              </div>
            </div>
          </div>
          <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group">
            <div class="dropdown">
              <button class="dropbtn">2016</button>
              <div class="dropdown-content">
                <?php include("months-hover.php") ?>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
</body>

</html>