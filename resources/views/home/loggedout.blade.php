@extends('layouts.loggedout')
<html>
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
    </head>
    <body>
        <?php
        
        $title = "Home";
        $res = " 
        <br>
        <tr>
        <form action='/sortLO' method='get'>
        <select id='genre' name='genreSelect'>
        <option value='All'>All</option>";

        foreach ($genres as $genre){
            $res = $res . "
            <option value='$genre->genre'>$genre->genre</option>";
        }

        $res = $res."</select>
        <td> <button type='submit' class='button' value='Select' name='selectedToSort'>Select by Genre</button></td>
        </form></tr>";

        
        $title = "Home";
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
                            <form action='/selected' method='get'>
                            
                            <td> <button type='submit' class='button' value='$work->postid' name='selectedToRead'>Read</button></td>
                            </form>
                        </tr>
                        ";
        } 

        $res = $res."</table>";
        $content = $res;
        
         ?>
        
    </body>
</html>