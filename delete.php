<!DOCTYPE html>
<html>
  <head>
    <title>Delete Account</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        text-align: center;
      }
      
      h1 {
        color: #4CAF50;
      }
      
      label {
        display: inline-block;
        width: 80px;
        text-align: left;
      }
      
      input[type=email], input[type=password] {
        width: 250px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        margin-bottom: 20px;
      }
      
      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <h1>Delete Account</h1>
    <form action="deleteexec.php" method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required><br><br>
      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required><br><br>
      <input type="submit" value="Login">
    </form>
  </body>
</html>
