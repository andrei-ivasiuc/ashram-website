<?php require_once('../header.php') ?>

<section class="sa-section" style="background-color: var(--bg-light);">
    <div class="container">
        <div class="row col-12">
            <h2 class="sm mb-4" style="text-align:center">Realization Newsletter</h2>
        </div>
        <div class="row gx-5">
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    2021
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="#">January</a></li>
                    <li><a class="dropdown-item" href="#">February</a></li>
                    <li><a class="dropdown-item" href="#">March</a></li>
                    <li><a class="dropdown-item" href="#">April</a></li>
                    <li><a class="dropdown-item" href="#">May</a></li>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    2020
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php include("months.php") ?> </ul>
            </div>

            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    2019
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php include("months.php") ?> </ul>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    2018
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php include("months.php") ?> </ul>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    2017
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php include("months.php") ?> </ul>
            </div>
            <div class="col-12 col-xs-12 col-sm-12 col-md-12 col-lg-2 mb-2 list-group dropdown">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    2016
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <?php include("months.php") ?> </ul>
            </div>

        </div>
    </div>
</section>