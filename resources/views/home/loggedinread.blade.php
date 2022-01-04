@extends('layouts.template')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Read</title>
        <style>
            .title{
            font-size: 28px;
        }
        </style>
    </head>
    <body>
        <?php
        
        $title = "Home";
        $res = "";
        $res = "   <style>
        th,td {
          padding: 20px;
        }
        th{font-family: leaner;}
        </style>
        
        <table class = 'readTable'>
        <tr class='title'>   
            <h2>$work->title</h2>
        </tr>
        <br><br>
        <tr>
            $user->username
        </tr>
        <br><br>
        <tr>
            $work->genre
        </tr>
        <br><br><br>
        <tr>
            $work->work
        </tr>";

        $res = $res."</table>";
        $content = $res;
         ?>
        
    </body>
</html>