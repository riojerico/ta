<?php
####--- cek url ---####
$actual_link = "$_SERVER[REQUEST_URI]";
$dir = explode("/",$actual_link);
$jml_dir = count($dir);

if ($jml_dir=="3") {
  $dot_dir = "";
}elseif ($jml_dir=="4") {
  $dot_dir = "../";
}
####--- end cek url ---####


?>
