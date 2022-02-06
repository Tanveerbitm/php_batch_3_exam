<?php


require_once "vendor/autoload.php";
use App\classes\StringWordCount;

$stringWordCount = new StringWordCount();
$stringWordCount->index();
/*
  public function index()
    {
        header("Location: pages/index.php");
    }
 */