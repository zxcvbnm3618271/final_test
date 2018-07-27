<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/27 0027
 * Time: 上午 11:40
 */
include "config.php";
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    $name = $_REQUEST["uname"];
    $pwd=$_REQUEST["upwd"];
    $realyname=$_REQUEST["urealyname"];
    $email=$_REQUEST["uemail"];
    $address=$_REQUEST["uaddress"];
    $sex=$_REQUEST["usex"];

    if(!empty($name)&&!empty($pwd)&&!empty($realyname)&&!empty($sex)){
        $inserSQL="insert into users  values(?,?,?,?,?,?)";
        $stmt=$conn->prepare($inserSQL);
        $stmt->bind_param("ssssss",$name,$pwd,$realyname,$email,$address,$sex);
        $stmt->execute();
        if($stmt->affected_rows>=1){
            print_r(json_encode(array("status"=>1,"msg"=>"注册成功")));

        }else{
            print_r(json_encode(array("status"=>0,"msg"=>"注册失败")));
        }
    }
}else{
    $error=array("status"=>-1,"msg"=>"不支持get方法");
    print_r(json_encode($error));
}