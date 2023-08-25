<?php
  $zip = $_GET['zip'];
  header('Content-Type: application/json; charset=utf-8');
  echo json_encode(array("message" => "郵便番号が見つかりません:" . $zip));