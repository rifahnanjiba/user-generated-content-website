
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    </head>

  <body>

    <div class="container">
      <form action="/store" method = "POST">
          @csrf
        <h1> CONTACT US</h1>
        <br><br>
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <br><br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <br><br>
        <label for="emailadd">Email</label>
        <input type="text" id="emailadd" name="email" placeholder="Your last name..">
        <br><br>
        <label for="Genre">Genre</label>
        <select id="genre" name="genre">
            <option value="Action">Action</option>
            <option value="Adventure">Adevnture</option>
            <option value="Thriller">Thriller</option>
            <option value="Horror">Horror</option>
            <option value="Inspirational">Inspirational</option>
        </select>
        <br><br>
        <label for="subject">Your text</label>
        <textarea id="subject" name="message" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="submit">

      </form>
    </div>

  </body>
</html>