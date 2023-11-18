<?php require_once('header.php')?>
<html>
    <head>
        <title>
            Gallery
        </title>
    </head>
    <body>
    
        <div class="banner" style="height: 15vh;text-align: center;">
            <h1 style="padding-top: 2.5%;">Gallery</h1>
        </div>
        <div class="content">
        </div>
            <div class="gallery">
        <?php
        $jsonData=file_get_contents("../BE/db.json");
        $images=json_decode($jsonData,true);
        $images=$images['images'];
        foreach($images as $image){
            ?>
                <div class="image">
                    <a href="#<?php echo $image['id'];?>">
                    <img src="../images/<?php echo $image['path'];?>.png">
                    </a>
                </div>
                <a href="#" id="<?php echo $image['id'];?>" class="lightbox">
                    <img src="../images/<?php echo $image['path'];?>.png">
                </a>
            <?php }?>
        </div>
        
    </body>
</html>