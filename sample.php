<html>
<head>
<title> </title>
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
            }
        </style>
        </head>
        <body >
        <h1 style="text-align:center ;color:black;font-style: bold;">LOGIN</h1>
<form  id = "forms" action ="login.php" method="POST">
 <p>EMAIL ID:</p><input class="input-item" type=" text" name="emailid"  required><br>
  <p>password:</p><input class="input-item" type=" password" name="password"  required><br>
  <input  class="input-item"  type="submit" name="login" value="login" style="padding: 8px 10px; font-size: 15px; border: 0px;background: olive; color: #fff; cursor: pointer; border-radius: 3px; text-alignoutline: none;" >
  </form>
  </body>
  </html>