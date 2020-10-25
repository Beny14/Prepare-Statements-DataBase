<?php
  include_once 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LOGIN</title>
  </head>
  <body>

    <form action="prepareStatementsForDb.php" method="POST">
      <input type="text" name="name" placeholder="Full Name"><br><br>
      <input type="email" name="email" placeholder="Email"><br><br>
      <input type="password" name="password" placeholder="Password"><br><br>
      <button type="submit" name="submit">Submit</button><br><br>
    </form>

  <?php
    $data = "Alex";

    $sql = "SELECT * FROM things WHERE fullName=?;";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL statement fail!";
    }else{
      mysqli_stmt_bind_param($stmt, "s", $data);
      mysqli_stmt_execute($stmt);
      $result = mysqli_stmt_get_result($stmt);

      while ($row = mysqli_fetch_assoc($result)) {
        echo $row['fullName'] . "<br>";
      }
    }
  ?>

  </body>
</html>
