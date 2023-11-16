<html>
    <head>
        <title>
            Sign Up
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
                <div class="signuplogin">
                <div class="box" style="border: 1px solid white;text-align:center">
                    <h1><a href="index.php" style="color:#696767">Sign Up</a></h1>
                </div>
                <div class="box" style="border: 1px solid white;text-align:center">
                    <h1><a href="pages/login.php">Login</a></h1>
                </div>
                </div>
                    <form action="#">

                    <div class="inputrow">

                        <div class="box">
                        <label for="fname">Username<span>*</span></label>
                        <input type="text" name="fname" required=""/>
                        </div>
              
                        <div class="box">
                        <label for="email">Full Name<span>*</span></label>
                        <input type="text" name="email" required=""/>
                        </div>
                        </div>
                        
                        <div class="inputrow">
                        
                        <div class="box">
                        <label for="phonenum">Password<span>*</span></label>
                        <input type="tel" name="phonenum" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required=""/>
                        </div>

                        <div class="box">
                        <label for="msg">Confirm Password<span>*</span></label>
                        <input type="text" name="fname" required=""/>
                        </div>
                        </div>

                        <div class="inputrow">
                        
                        <div class="box">
                        <label for="phonenum">Date of Birth<span>*</span></label>
                        <input type="date" name="phonenum" required=""/>
                        </div>

                        <div class="box">
                        <label for="msg">Sex<span>*</span></label>
                        <select name="sex" id="cars" style="height: 35;text-align:center">
                        <option value="volvo" selected disabled>--------------Choose Sex--------------</option>
                        <option value="volvo">Female</option>
                        <option value="volvo">Male</option>
                        </select>

                        </div>
                        </div>

                        <div class="inputrow" style="justify-content:center">
                        <button type="submit">Sign Up</button>
                        </div>

                    </form>
            </div>
        </div>

    </body>

   