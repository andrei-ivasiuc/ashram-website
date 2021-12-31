<?php require_once('../../header.php') ?>
<!-- <?php 
 

$uri_path = parse_url($_SERVER['SCRIPT_NAME'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//echo PHP_URL_PATH;
//echo $uri_segments[2];

$topic=$uri_segments[2];
echo "topic : " . $uri_segments[2];
?> -->
<!-- ARTICLES -->
<?php include_once("../article-topics.php") ?>
