<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$user=new stdClass();

$user->uname = isset($_POST["uname"]) ? $_POST["uname"] : "";
$user->fname = isset($_POST["fname"]) ? $_POST["fname"] : "";
$user->pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
$user->cpass = isset($_POST["cpass"]) ? $_POST["cpass"] : "";
$user->dob = isset($_POST["dob"]) ? $_POST["dob"] : "";
$user->sex = isset($_POST["sex"]) ? $_POST["sex"] : "";


$jsonData=file_get_contents("db.json");
$users=json_decode($jsonData,true);
$users["users"][]=$user;
$updatejData=json_encode($users);
$result=file_put_contents("db.json", $updatejData);
if($result!==false){
    echo '<script>alert("Sign Up Successful!");
    window.location="../pages/login.html"</script>';
}
}
?>