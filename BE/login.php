<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user=new stdClass();
    
    $user->uname = isset($_POST["uname"]) ? $_POST["uname"] : "";
    $user->pass = isset($_POST["pass"]) ? $_POST["pass"] : "";

    $jsonData = file_get_contents('db.json');
    $users = json_decode($jsonData, true);

    $flag=false;
    foreach($users['users'] as $userdata){
        if($userdata["uname"]==$user->uname && $userdata["pass"]==$user->pass){
            $flag=true;
            break;
        }
    }
    if($flag){
        session_start();
        $_SESSION["username"] = $user->uname;
        echo '<script>alert("Login Successful!");
        window.location="../pages/home.php"</script>';
    }
    else{
        echo '<script>alert("Incorrect Username or Password");
        window.location="../pages/login.html"</script>';
        
    }

}

?>