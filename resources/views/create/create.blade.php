<form action="/publish" method="POST">
    <table>
        <tr>
            <td width="50%" height="50px">Title</td>
            <td width="50%" height="50px"><input type="text" name="ttl" placeholder="Give a title" title="Enter Password" rows="5" cols="100"></td> 
        </tr>
        <tr>
            <td width="50%" height="50px">Description</td>
            <td width="50%" height="50px">
                <textarea id="description" name="description" rows="10" cols="100">
                    
                </textarea>
            </td> 
        </tr>
        <tr>
            <td width="50%" height="50px">Your Story</td>
            <td width="50%" height="50px">
                <textarea id="work" name="work" rows="10" cols="100">
           
                </textarea>
            </td> 
        </tr>
        Choose the genre: 
        <tr><label for="Genre">Genre</label>
        <select id="genre" name="genre">
            <option value="Action">Action</option>
            <option value="Adventure">Adevnture</option>
            <option value="Thriller">Thriller</option>
            <option value="Horror">Horror</option>
            <option value="Inspirational">Inspirational</option>
        </select></tr>
        <br><br>
                     <input type = 'submit' value = 'Select' />
        <tr>
            <td colspan="2"><input type="submit" name="sub" value="Login" style="width: 150px;height: 50px; border-radius: 30px;"></td>
        </tr>
    </table>
</form>