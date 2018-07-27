<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/27 0027
 * Time: 上午 10:02
 */
$dbHostName='127.0.0.1';
$dbUser='root';
$dbPwd='';
$dataBase='ygshopping1';
$conn=new mysqli($dbHostName,$dbUser,$dbPwd,$dataBase);
mysqli_query($conn,"set names utf8");
