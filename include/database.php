<?php
/**
 * Created by PhpStorm.
 * User: DataKeyt
 * Date: 12.10.2015
 * Time: 22:22
 */
//connect DB
$db = mysqli_connect('127.0.0.1', 'root', '', 'cleanblog') or die(mysqli_error($db));
mysqli_query($db, "SET NAMES 'utf8'");
