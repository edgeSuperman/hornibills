<?php
/**
 * Created by PhpStorm.
 * User: danghongyang
 * Date: 13-12-26
 * Time: 下午11:41
 */

$content = $_POST["content"];
$href = $_POST["href"];

$content = json_decode($content, true);
$content = json_encode($content);

$r = file_put_contents("../data/".$href.".json", $content);
$r = file_put_contents("../data/".$href."-".date("Y-m-d")."-".time().".json", $content);