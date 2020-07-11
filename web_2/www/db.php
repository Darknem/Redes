<?php
session_start();

$conn = mysqli_connect(
  'paginasql:8889',
  'root',
  'root',
  'pagina_1'
) or die(mysqli_erro($mysqli));

?>