<?php
//include "config.php";

$mysqli = new mysqli("localhost", "root", "", "tutorial");

$name = $_POST['name'];
$email = $_POST['email'];
$lang = $_POST['lang'];

$foundjquery = "Not found";
if(in_array('jQuery',$lang)){
    $foundjquery = "found";
}
// Converting the array to comma separated string
//$lang = implode(",",$lang);
$lang_json = json_encode($lang);
// check entry
$sql = "SELECT COUNT(*) AS cntuser from userinfo WHERE email='".$email."'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($result);
$count = $row['cntuser'];

if($count > 0){
    // update

    mysqli_query( $mysqli, "UPDATE userinfo SET name='".$name."',lang='".$lang_json."' WHERE email='".$email."'");
}else{
    // insert
    mysqli_query($mysqli, "INSERT INTO userinfo(name,email,lang) VALUES('".$name."','".$email."','".$lang_json."')");
}
$return_arr = array('name'=>$name,'email'=>$email,'lang'=>$lang_json,"foundjquery"=>$foundjquery);

echo json_encode($return_arr);