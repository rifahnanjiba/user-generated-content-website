<!DOCTYPE html>
<html>
    <head>
        <style>
body
{
    font-family: lucida sans, corbel;
    background-color: #e9e9e9;
}

.h4
{
    font-family: warmesty;
    text-align: right;
    text-decoration: #DFE7F2;      
    color: #8A5D0E;
    font-size: 3em;
}

.h3
{
    font-family: warmesty;
    text-decoration: #DFE7F2;      
    color: #8A5D0E;
    font-size: 3em;
}

body p
{
    font-size: 1em;
    line-height: 1.30;
    padding-bottom: 50px;
}


div.b{
    text-align: right; 
}

div.f{
    text-align: center;
    font-family: courier new; 
}

#wrapper
{
    width: 1450px;
    background-color: papayawhip;
    margin: 0 auto;
    padding: 10px;
    border: 5px solid burlywood;
}

#banner
{
    background-image: url(../Images/Home/banner3.jpg);
    background-repeat: repeat;
    background-size: cover;
    border: 5px solid burlywood;    
    height: 300px;
}

#content_area
{
    float: left;
    width: 1400px;
    margin: 20px 0 20px 0;
    padding: 10px;
}

footer
{
    clear: both;
    width: auto;
    height: 40px;
    padding: 10px;
    border: 3px solid burlywood;
    text-align: center;
    color: white;
    text-shadow: 0.1em 0.1em #333;
    background-repeat: no-repeat;
    background-color: #ab761a;
}

#navigation
{
    height: 65px;
    border: 3px solid burlywood;
    margin-top: 20px;
    text-shadow: 0.1em 0.1em #8A5D0E;
    color: #DFE7F2;
    background-image: url(../Images/Home/navbar4.jpg);
    background-repeat: no-repeat;
    background-color: #DFE7F2;
}

#nav
{
    list-style: none;
    padding-left: 530px;
}

#nav ul
{
    margin: 0;
    padding: 0;
    width: auto;
    display: none;
}

#nav li
{
    padding-left: 40px;
    font-family: adlery pro;
    font-style: initial;
    color: white;
    font-size: 28px;
    float: left;
    position: relative;
    width: 150px;
    height: 51px;
}

#nav a:link{color: white; text-decoration: none; display: block;}
#nav a:visited{color: white; text-decoration: #734e0e;}
#nav a:active
{
    color: #734e0e;
    text-decoration: #734e0e;
}

#nav a:hover
{
    color: #4d320a;
}

.imgLeft
{
    float: left;
    width: 450px;
    height: 321px;
    margin: 0px 20px 20px 0;
    padding: 10px;
}

.imgRight
{
    float: right;
    width: 450px;
    height: 350px;
    margin: 10px 10px 100px 50px;
    padding: 10px;
}

.imgCenter
{
    float: top;
    width: 1440px;
    height: 576px;
    margin: 0px 0px 0px -5px;
    padding: 0px;
}

.imgBottom
{
    float: top;
    width: 1440px;
    height: 940px;
    margin: 0px 0px 0px -5px;
    padding: 0px;
}</style>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?php echo $title; ?></title>
      <link href="css/app.css" rel="stylesheet" type="text/css"/>  
    </head>
    
    <body>
        <div id = "wrapper">
            <div id  = "banner"></div>
            
            <nav id = "navigation">
                <ul id = "nav">
                    <li><a href = "/home/loggedin">Home</a></li>
                    <li><a href = "/home/loggedin/create">Create</a></li>
                    <li><a href = "/profile">My Profile</a></li>
                    <li><a href = "/home">Log Out</a></li>
                </ul>
            </nav>
            
            <div id = "content_area">
                <?php echo $content; ?>
            </div>
            
            <footer><div class="f"><p>Copyright&#169; 2021 FictCave. All Rights Reserved.</p></div></footer>
        </div>
            
    </body>
</html>