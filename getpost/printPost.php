<?php
/**
 * Created by PhpStorm.
 * User: 1516734
 * Date: 12/04/2016
 * Time: 09:30
 */

$title=$_POST["title"];
$content=$_POST["content"];
$category=$_POST["category"];
 echo "<article>";
echo "<h1>$title</h1></br>";
echo "<p>$content</p></br></br>";
echo "<strong>$category</strong>";


?>
