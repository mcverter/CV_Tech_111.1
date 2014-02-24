<?php

function make_header ($title) {

echo <<<EOT

<!DOCTYPE html>
<html>
<head>
    <title> Mitchell Verter | $title </title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>

<body>
<nav>
    <div class="nav">
        <ul>
            <li> <a href="engineerWork.php"> Tech Work</a>  </li>
            <li> <a href="projects.php"> Tech Projects  </a> </li>
            <li> <a href="software.php"> Tech Skills </a> </li>
            <li> <a href="demosrepos.php"> Demos &amp; Repos </a> </li>
            <li> <a href="contact.php"> Contact </a> </li>
        </ul>
    </div>
</nav>
<br>
<h1> $title </h1>
<div class="main">
EOT;
}
?>