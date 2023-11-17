<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:../index.php");
}
?>
<link rel="stylesheet" href="../css/mStyle.css">
<link rel="stylesheet" href="../css/icons.css">
<div class="row" id="header">
            <div id="dropdown-menu">
                <span><i class="ico burger-ico"></i>MENU</span>
                <div class="dropdown-content">
                    <ul>
                        <a href="home.php">
                            <li><i class="ico ico-l user-ico"></i>Home</li>
                        </a>
                        <a href="gallery.php">
                            <li><i class="ico ico-l gallery-ico"></i>Gallery</li>
                        </a>
                        <a href="cv.php">
                            <li><i class="ico ico-l cv-ico"></i>CV</li>
                        </a>
                        <a href="contactme.php">
                            <li><i class="ico ico-l phone-ico"></i>Contact Me</li>
                        </a>
                    </ul>
                </div>
            </div>

            <div id="user-span">
                <span style="color:white;margin-right:20px">Welcome, <?php echo $_SESSION["username"]; ?></span>
               <a href="../BE/logout.php"> <i class="ico ico-l logout-ico"></i>Logout</a>
            </div>
        </div>
