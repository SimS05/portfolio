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
                    <h1><a href="pages/login.html">Login</a></h1>
                </div>
                </div>
                    <form action="BE/signup.php" method="POST" id="signup-form">

                    <div class="inputrow">

                        <div class="box">
                        <label for="uname">Username<span>*</span></label>
                        <input type="text" name="uname" id="uname"/>
                        </div>
              
                        <div class="box">
                        <label for="fname">Full Name<span>*</span></label>
                        <input type="text" name="fname" id="fname"/>
                        </div>
                        </div>
                        
                        <div class="inputrow">
                        
                        <div class="box">
                        <label for="pass">Password<span>*</span></label>
                        <input type="password" name="pass" id="pass"/>
                        </div>

                        <div class="box">
                        <label for="cpass">Confirm Password<span>*</span></label>
                        <input type="password" name="cpass" id="cpass"/>
                        </div>
                        </div>

                        <div class="inputrow">
                        
                        <div class="box">
                        <label for="dob">Date of Birth<span>*</span></label>
                        <input type="date" name="dob" id="dob"/>
                        </div>

                        <div class="box">
                        <label for="sex">Sex<span>*</span></label>
                        <select name="sex" id="sex" style="height: 35;text-align:center">
                        <option value="" selected disabled>--------------Choose Sex--------------</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        </select>

                        </div>
                        </div>

                        <div class="inputrow" style="justify-content:center">
                        <button type="button" onclick="signup()">Sign Up</button>
                        </div> 

                    </form>
            </div>
        </div>
    <script>
        function signup(){
            var flag=false;
            var uname=document.getElementById("uname").value;
            var fname=document.getElementById("fname").value;
            var pass=document.getElementById("pass").value;
            var cpass=document.getElementById("cpass").value;
            var dob = new Date(document.getElementById("dob").value);
            var sex=document.getElementById("sex").value;
            
           
    
            if((uname=="") || (fname=="") || (pass=="") || (cpass=="") || (dob=="") || (sex=="") || (sex==null)){
                flag=true;
                alert("Fill out all the fields"); 
            }
            else{
                if(pass!==cpass){
                    flag=true;
                    alert("Passwords Do Not Match");
                }
                var today=new Date();
                if(dob>today){
                    flag=true;
                    alert("Date Is Invalid");
                }
            }
            if(!flag){
                    document.getElementById("signup-form").submit();
                }
        }
    </script>
    </body>

   