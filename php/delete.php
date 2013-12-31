<?php
/**
 * Created by PhpStorm.
 * User: danghongyang
 * Date: 13-12-26
 * Time: 下午11:41
 */
$href = $_POST["href"];

$content = json_decode($content, true);
$content = json_encode($content);

$filename = "../data/".$href.".json";

copy($filename, "../data/".$href."-".date("Y-m-d")."-".time().".json");

unlink($filename);