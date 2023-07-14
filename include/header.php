<?php
    require_once "connect.php";
/** 
 * code to add page level add-on js/css scripts 
 */ 
    if(!isset($addOnCSSLinks)){
        $addOnCSSLinks = "";
    }
    if(!isset($addOnJSLinks)){
        $addOnJSLinks = "";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Template</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap/bootstrap.min.css" rel="stylesheet"/>
  <link href="css/default_style.css" rel="stylesheet"/>
  <?=$addOnCSSLinks?>
  <script src="js/jquery/jquery-3.7.0.js"></script>
  <script src="js/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="js/default_script.js"></script>
  <?=$addOnJSLinks?>
</head>
<body>