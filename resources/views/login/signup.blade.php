<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css">
</head>

<body>
    <div style="background-image: url(Images/v4.jpg); background-size: 60% 700px; width: 100%; height: 690px; background-repeat: no-repeat; background-position: bottom;">
        <h1 style="font-size: 50px; padding-left: 60px; padding-top: 20px; font-family: verdana">Create your account</h1>
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
 
      <center>
          <div style="background:rgba(255,255,255,.7); width: 50%;">
            <form action="/store" method="POST">
                @csrf
            <fieldset>
            <legend>Sign up details: </legend>
            <table>
            <tr>
                <td width="50%" height="50px">Name</td>
                <td width="50%" height="50px"><input type="text" name="nm" placeholder="Enter your name" title="Enter Name"></td>
            </tr>
            <tr>
                <td width="50%" height="50px">Username</td>
                <td width="50%" height="50px"><input type="text" name="un" placeholder="Enter username" title="Enter Username"></td>
            </tr>
            <tr>
                <td width="50%" height="50px">Email</td>
                <td width="50%" height="50px"><input type="text" name="em" placeholder="Enter Username" title="Enter Email"></td>
            </tr>
            <tr>
                <td width="50%" height="50px">Password</td>
                <td width="50%" height="50px"><input type="text" name="ps" placeholder="Enter password" title="Enter Password"></td> 
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="sub" value="Sign Up" style="width: 150px;height: 50px; border-radius: 30px;"></td>
            </tr>
            </table>
            </fieldset>
            </form> 
            </div>
        </center>     
    </div>
</body>
</html>