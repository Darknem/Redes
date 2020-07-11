<?php
session_start();

$conn = mysqli_connect(
  'clinicasql:3306',
  'root',
  'root',
  'web_1'
) or die(mysqli_erro($mysqli));

?>