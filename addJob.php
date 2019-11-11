<?php
   var_dump($_POST);
?>

<html>
   <head>
      <title>Add Job</title>
   </head>
   <body>
   <h2>Add Job</h2>
      <form action="addJob.php" method="post">
         <label for="">Title:</label>
         <input type="text" name="title"><br><br>
         <label for="">Description:</label>
         <input type="text" name="description">
         <button type="submit">Save</button>
      </form>
   </body>
</html>