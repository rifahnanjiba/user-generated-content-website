@extends('layouts.template')
<?php 
$title = "Create";
$res = "
<form action='/publish' method='get'> 
 <!-- {{ csrf_field() }} -->
    <table>
        <tr>
            <td width='50%' height='50px'>Title</td>
            <td width='50%' height='50px'><input type='text' name='ttl' placeholder='Give a title' title='Title' rows='5' cols='100'></td> 
        </tr>
        <tr>
            <td width='50%' height='50px'>Description</td>
            <td width='50%' height='50px'>
                <textarea id='description' name='description' rows='10' cols='100'>
                    
                </textarea>
            </td> 
        </tr>
        <tr>
            <td width='50%' height='50px'>Your Story</td>
            <td width='50%' height='50px'>
                <textarea id='work' name='work' rows='10' cols='100'>
           
                </textarea>
            </td> 
        </tr> 
        <tr><label for='Genre'>Genre</label>
        <select id='genre' name='genre'>";

        foreach ($genres as $genre){
            $res = $res . "
            <option value='$genre->genre'>$genre->genre</option>";
        }

        $res = $res."
        </select></tr>
        <br><br>
         
        <tr>
            <td colspan='2'><input type='submit' name='sub' value='Publish' style='width: 150px;height: 50px; border-radius: 30px;'></td>
        </tr>
    </table>
</form>"; 
    $content = $res;?>