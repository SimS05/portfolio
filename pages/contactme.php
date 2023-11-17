<?php require_once('header.php');?>
<html>
    <head>
        <title>
            Contact Me
        </title>
    </head>
    <body>
        
        <div class="banner" style="height: 15vh;text-align: center;">
            <h1 style="padding-top: 2.5%;">Contact Me</h1>
        </div>
        <div class="content">
    
            <div class="div-fifty-l">
                As a devoted computer science student, I am always looking for opportunities to connect with others who share the same passion and motivation towards furthering their computer science knowledge and skills sets.<br><br>Feel free to also contact me through the below:<br><br>
                <li style="list-style: none;"><i class="ico ico-l email-ico" style="width:28px"></i>sima.sulaiman@lau.edu</li>
                <li style="list-style: none;"><i class="ico ico-l linkedin-ico"></i>linkedin.com/in/simasulaiman</li>
                <li style="list-style: none;"><i class="ico ico-l insta-ico"></i>instagram.com/sima_sulaiman</li>
             </div>
             <div class="div-fifty-r">
                <div class="contactus">
                    <form action="#">

                        <label for="fname">Full Name<span>*</span></label>
                        <input type="text" name="fname" required=""/>

                        <label for="email">Email<span>*</span></label>
                        <input type="text" name="email" required=""/>
                        
                        <label for="phonenum">Phone Number<span>*</span></label>
                        <input type="tel" name="phonenum" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required=""/>

                        <label for="msg">Message<span>*</span></label>
                        <textarea name="msg"style="resize:none;height:100px" required=""></textarea>

                        <button type="submit">Send</button>

                    </form>
                </div>
             </div>

        </div>
    </body>
</html>