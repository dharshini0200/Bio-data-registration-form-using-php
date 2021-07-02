<html>
    <head>
        <title>personal information</title>
        <style>
        body{
            background-image: url(bg.jpg);
            background-size:cover;
            background-position:center;

        }
    
            #forms{
                width: 500px;
                padding:40px;
                background-color:black;
                font-size:15px;
                color:white;
                font-family:sans-serif;
                margin-left: auto;
                margin-right: auto;
            }
            .input-item{
               margin-top: 12px;
               margin-bottom: 12px;
               width:100%;
               padding:10px;
            
            }
        </style>
    </head>
    <body >
        <h1 style="text-align:center ;color:black;font-style: bold;">BIO DATA FORM</h1>
        <form id="forms" action="connect.php" method=POST>
            
            <p><b>FIRST NAME:</b></p>
            <input class="input-item" type="text" name="FIRSTNAME" maxlength="20" required><br>
            <p><b>LAST NAME:</b></p><input  class="input-item" type="text" name="LASTNAME"  required><br>
             <p><b>FATHER NAME:</b></p><input class="input-item" type=" text" name="FATHERNAME"  required><br>
			 <p><b>EMAIL ID:</b></p><input class="input-item" type=" text" name="EMAILID"  required><br>
             <p><b>DATE OF BIRTH</b></p><input class="input-item" type="date" name="date" required><br> 
             
             
             <div>
                 <p><b>GENDER:</b></p>
                 <input type="radio" name="gender" value="male">Male</input>
                 <input  type="radio" name="gender"  value="Female">Female</input>
                 <input  type="radio" name="gender"  value="other">other</input>
             </div>

                 <div>
                    <p><b>BLOOD GROUP:</b></p>
                    <input class="input-item" list="BLOOD GROUP" name="BLOODGROUP"/>
                    <datalist id="BLOOD GROUP">
                       <option  value="O+"></option>
                       <option  value="O-"></option>
                       <option   value="A+"></option>
                       <option  value="A-"></option>
                       <option  value="B+"></option>
                       <option  value="B-"></option>
                       <option  value="AB+"></option>
                       <option  value="AB-"></option>
                    </datalist>
                    </div>
                    <p><b> PASSWORD</b></p><input class="input-item" type="password" name="password" required><br> 
			 <p><b>ADDRESS</b></p><input class="input-item" type="text" name="ADDRESS" required><br> 
             
             
             <input  class="input-item"  type="submit" name="register" value="submit" style="padding: 8px 10px; font-size: 15px; border: 0px;background: olive; color: #fff; cursor: pointer; border-radius: 3px; text-alignoutline: none;" >
       <P> Already a member? </p>
       <a href="sample.php" style ="text-align:center;"><h2>click here to login<h2></a>
        </form>
    </body>
</html>