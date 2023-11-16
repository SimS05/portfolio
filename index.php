<html>
    <head>
        <title>
            Gallery
        </title>
        <link rel="stylesheet" href="css/mStyle.css">
        <link rel="stylesheet" href="css/icons.css">
    </head>
    <body>
        <div id="header" style="display:inline-block;padding-bottom:0px;text-align:center;width:100%;height:60px">
            <h1 style="color:white;margin:0px;padding:10px">Sima's Portfolio<h1>
        </div>
            
        <div style="text-align:center">
            <div class="signup">
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

    </body>

   