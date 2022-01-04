<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>

<body>
    <div style="background-size: 70% 700px; width: 100%; height: 710px; background-repeat: no-repeat; background-position: bottom;
                background-color: #8ea667">
        <h1 style="font-size: 50px; padding-left: 60px; padding-top: 20px; font-family: verdana">Welcome back!</h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
 
      <center>
          <div style="background:rgba(255,255,255,.7); width: 50%;">
            <form action="/validate" method="POST">
                @csrf
            <fieldset>
            <legend>Enter your credentials: </legend>
            <table>
            <tr>
                <td width="50%" height="50px">Username</td>
                <td width="50%" height="50px"><input type="text" name="un" placeholder="Enter Username" title="Enter Username"></td>
            </tr>
            <tr>

                <td width="50%" height="50px">Password</td>
                <td width="50%" height="50px"><input type="text" name="ps" placeholder="Enter Password" title="Enter Password"></td> 
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px;height: 50px; border-radius: 30px;"></td>
            </tr>
            </table>
            </fieldset>
            </form> 
            </div>
        </center>     
    </div>
</body>
</html>