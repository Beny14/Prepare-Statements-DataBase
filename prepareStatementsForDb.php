<?php
  include_once 'connect.php';

  if (isset($_POST['submit'])) {
    $Name = mysqli_real_escape_string($connect, $_POST['name']);
    $Email = mysqli_real_escape_string($connect, $_POST['email']);
    $Password = mysqli_real_escape_string($connect, $_POST['password']);

    $sql = "INSERT INTO things (fullName, email, password) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($connect);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      echo "SQL error!";
    }else{
      mysqli_stmt_bind_param($stmt, "sss", $Name, $Email, $Password);
      mysqli_stmt_execute($stmt);
   }
    header("Location: prepareStatementsForDb.php?senddate=success");
  }

?>
