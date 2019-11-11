<?php
   require_once 'vendor/autoload.php';
   use Illuminate\Database\Capsule\Manager as Capsule;
   use App\Models\Job;
   
   $capsule = new Capsule;
   
   $capsule->addConnection([
      'driver'    => 'mysql',
      'host'      => 'localhost',
      'database'  => 'cursophp',
      'username'  => 'root',
      'password'  => '',
      'charset'   => 'utf8',
      'collation' => 'utf8_unicode_ci',
      'prefix'    => '',
   ]);
   
   // Make this Capsule instance available globally via static methods... (optional)
   $capsule->setAsGlobal();
   // Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
   $capsule->bootEloquent();

   if (!empty($_POST)) {
      $jobs = new Job();
      $jobs->title = $_POST['title'];
      $jobs->description = $_POST['description'];
      $jobs->visible = true;
      $jobs->save();
   }
   
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