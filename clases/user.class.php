<?php

class user{ 

public static function signup($username,$mail,$password){

$conn=database::getConnection();

$sql="INSERT INTO `login` (`username`,`email`,`password`)
    VALUES('$username','$mail','$password')";

if($conn->query($sql)==TRUE){
    return true;
}
else{
    return false;
}
}

public static function login($username, $password)
{
    $db='login';
    $conn=database::getConnection();
    if($username=="syed"  ){
        $db='admins';
    }
    
    $sql="SELECT * FROM  `$db` WHERE `username` = '$username'";
    $out = $conn->query($sql);
    if($out->num_rows == 1){
        $row = $out->fetch_assoc();
        if($row['password'] == $password)
        { 
            $username=$row['username'];
            return true;
    }
    else{
        ?><script>alert('Invalid password!\nGo back!')</script><?php
        return false;
    }
}
    else{
        ?><script>alert('Invalid user!\nGo back!')</script><?php
    }

}
public static function order($beefribs , $beefwibo , $beefwobo, $muttonribs, $muttonleg , $muttonboneless, $muttonwithbone, $chickenwithskin, $chickenskinless, $chickenbreast, $chickendrumstick,$name){

    $conn=database::getConnection();
    
    $sql="UPDATE `login` SET beefribs= $beefribs, beefwibo=$beefwibo  , beefwobo=$beefwobo, muttonribs=$muttonribs, muttonleg=$muttonleg , muttonboneless=$muttonboneless, muttonwithbone=$muttonwithbone, chickenwithskin=$chickenwithskin, chickenskinless= $chickenskinless, chickenbreast= $chickenbreast, chickendrumstick=$chickendrumstick
        WHERE `username` = '$name' ";
    
    if($conn->query($sql)==TRUE){
        return true;
    }
    else{
        echo "failed" .$conn->error;

        return false;
    }
    }
}

function load_template($name)
{
    include "C:\\xampp\htdocs\MeatShop\__templates\\$name.html";
}   