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
    background-color: #8a9e6a;
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
    border: 3px #bed19f;
    text-align: center;
    color: white;
    text-shadow: 0.1em 0.1em #333;
    background-repeat: no-repeat;
    background-color:  #60753f;
}

#navigation
{
    height: 70px;
    border: 3px #bed19f;
    margin-top: 20px;
    text-shadow: 0.1em 0.1em #a0b382;
    color: #DFE7F2;
    background-image: url(../Images/Home/navbar4.jpg);
    background-repeat: no-repeat;
    background-color: #60753f;
}

#nav
{
    list-style: none;
    padding-left: 620px;
    padding-top: 17px;
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
}

.button{
    background-color: #475C20;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title><?php echo $title; ?></title>
      <link href="css/app.css" rel="stylesheet" type="text/css"/>  
    </head>
    
    <body>
        <div id = "wrapper">
        
            
            <nav id = "navigation">
                <ul id = "nav">
                    <li><a href = "/loggedout">Home</a></li>
                    <li><a href = "/login">Log in</a></li>
                    <li><a href = "/signup">Sign up</a></li>
                </ul>
            </nav>
            
            <div id = "content_area">
                <?php echo $content; ?>
            </div>
            
            <footer><div class="f"><p>Copyright&#169; 2021 FictCave. All Rights Reserved.</p></div></footer>
        
            
    </body>
</html>