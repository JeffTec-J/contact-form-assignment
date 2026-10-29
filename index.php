<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Submission form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
     <h1>Submission Form</h1>
    
       <form action="submit.php" method="POST">

          <label for="named">Name</label><br>
          <input type="text" id="name" name="name" ><br>

                   <label for="email">Email</label><br>
                   <input type="text" id="email" name="email"><br>
                   
          <label for="contact">contact</label><br>
          <input type="text" id="contact" name="contact"><br>
     
          <button type="submit">Submit</button>
<p><a href="dashboard.php">view contact</a></p>
        </form>

      </div>
</body>
</html>
