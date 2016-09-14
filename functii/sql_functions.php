<?php
function conectare($host="localhost",$user="root",$password="",$dbname="php1finalexamen"){
   return mysqli_connect($host, $user, $password, $dbname);
}

function test($data){
    $data=  trim($data);
    $data=  htmlspecialchars($data);
    $data= stripslashes($data);
    return $data;
}

function cautauser($n){
    $link=  conectare();
    $n=  test($n);
    $n=  mysqli_real_escape_string($link,$n);
    $query="select username,password from angajati where username='$n'";
    $rez=  mysqli_query($link, $query);
    return mysqli_fetch_array($rez);
}

function inregistrare($n,$p){
    $link=  conectare();
    $n=  test($n);
    $n=  mysqli_real_escape_string($link,$n);
    $p=  test($p);
    $p=  mysqli_real_escape_string($link,$p);
    $p=  md5($p);
    $query="insert into angajati(username,password) values ('$n','$p')";
    $user=  cautauser($n);
    if($user){
        return null;
    } else {
        return mysqli_query($link, $query);
    }
            
}

function login($n,$p){
    $link=  conectare();
    $n=  test($n);
    $n=  mysqli_real_escape_string($link,$n);
    $p=  test($p);
    $p=  mysqli_real_escape_string($link,$p);
    $p=  md5($p);
    $user=  cautauser($n);
    if($user==null){
        return null;
    } else {
        if($user['password']==$p){
            return $user;
        }else {
            return null;
        }
    }
}

function angajati(){
    $link=  conectare();
    $query="select id, username,password from angajati ";
    $rez=  mysqli_query($link, $query);
    $vector=array();
    while($angajat= mysqli_fetch_array($rez)){
        array_push($vector, $angajat);
    }
    return $vector; 
}
function cauta_dupa_id($id){
    $link=  conectare();
    $id=test($id);
    $id=  mysqli_real_escape_string($link,$id);
    $query="select username,password from angajati where id='$id'";
    $rez=  mysqli_query($link, $query);
    return mysqli_fetch_array($rez);
}

function trimitemesaj($m,$s,$r){
    $link=  conectare();
    $m=  test($m);
    $m=  mysqli_real_escape_string($link,$m);
    $query="insert into mesaje(message,sender,receiver) values ('$m','$s','$r')";
    $rez=  mysqli_query($link, $query);
    return $rez;
}

function preia_mesaje(){
    
    $link=  conectare();
    $query="select sender,message,receiver from mesaje where receiver = '". $_SESSION['user']."'" ;
    $rez=  mysqli_query($link, $query);
    $vector=array();
    while($msj= mysqli_fetch_array($rez)){
        array_push($vector, $msj);
    }
    return $vector;
}
?>