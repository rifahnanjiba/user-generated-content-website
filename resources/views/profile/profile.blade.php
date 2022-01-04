@extends('layouts.template')
<html>
    <head>
        <meta charset="UTF-8">
        <title>My Profile</title>
    </head>
    <body>
        <?php
        
        $title = "My Profile";
        $res = "   <style>
        th,td {
          padding: 20px;
        }
        th{font-family: leaner;}
        </style>
        
        <table class = 'readTable'>
        <tr>    

            <th>Name</th>
            <td>:</td>
            <td>$user->name</td>

        </tr>
        <tr>    

            <th>Username</th>
            <td>:</td>
            <td>$user->username</td>

        </tr>
        <tr>    

            <th>email</th>
            <td>:</td>
            <td>$user->email</td>

        </tr>
        <tr>    

            <th>Date joined</th>
            <td>:</td>
            <td>$user->created_at</td>

        </tr>
        </table>
        
        <br><br><br>
        <h2>My works:</h2>
        ";
        $res = $res."   <style>
        th,td {
          padding: 20px;
        }
        th{font-family: leaner;}
        </style>
        
        <table class = 'readTable'>
        <tr>    
            <th>Title</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Created on</th>
            <th></th>
            <th></th>
        </tr>";

        foreach ($works as $work) 
        {
            $res = $res .
                    "   
                        <tr>
                            <td>$work->title</td>
                            <td>$work->genre</td>
                            <td>$work->description</td>
                            <td>$work->created_at</td>
                            <form action='/selected' method='get'>
                            <td> <button type='submit' class='button' value='$work->postid' name='selectedToRead'>Read</button></td>
                            </form>
                            <form action='/delete' method='get'>
                            <td> <button type='submit' class='button' value='$work->postid' name='selectedToDelete'>Delete</button></td>
                            </form>
                        </tr>
                        ";
        } 

        $res = $res."</table>";
        $content = $res;
         ?>
        
    </body>
</html>