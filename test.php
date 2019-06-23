<?php

if(/*"chi" == $_POST[username] &&*/ "DaiDai0427" == $_POST[password]){

echo <<<_END
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome!</title>
    <link href=css/s2.css type="text/css" rel="stylesheet" />
  </head>

  <body>
    <h1 class="onLeft">MuA~</h1>

    <p> I love Daidai~</p>
    <hr>
    <p>v2ray <a href="p.php">configuration<a><p>
  </div>
</html>
=======
    <style>
    body {
        width:90%;
        margin:auto;
        background-color:rgb(214,214,214);
        padding: 10px;}

    p {
        font-family: Arial;}

    .onLeft {
        text-align: left;
        width: 90%;
        margin: 10;
        font-family: Helvetica;}

    .table01 {
        background-color:white;
        width: 15%;
        margin:;}

    .page {
        border: 1px solid #665544;
        background-color: #efefef;
        padding: inherit;}

    .list {
        border: 1px solid #665544;
        background-color: rgb(255,255,255);
        padding: inherit;
        height: 5em;
        width: 90%;}

    </style>

_END;
}
else {
  echo <<<_END
  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href=css/s2.css type="text/css" rel="stylesheet" />
      <title>ERROR!</title>
      <style>
    body {
        width:90%;
        margin:auto;
        background-color:rgb(214,214,214);
        padding: 10px;}

    p {
        font-family: Arial;}

    .onLeft {
        text-align: left;
        width: 90%;
        margin: 10;
        font-family: Helvetica;}

    .table01 {
        background-color:white;
        width: 15%;
        margin:;}

    .page {
        border: 1px solid #665544;
        background-color: #efefef;
        padding: inherit;}

    .list {
        border: 1px solid #665544;
        background-color: rgb(255,255,255);
        padding: inherit;
        height: 5em;
        width: 50%;}

    </style>
    </head>
    <body>
      <h1 class="onLeft">Nah-Nah :(</h1>

      <p color="red"> WRONG PASSWORD.</p>
    </body>
</html>
_END;
}
?>
