<?php include 'database.php'; ?>

<?php

  // create a variable
  $name=$_POST['name'];
  $email=$_POST['email'];
  $text=$_POST['tarea'];

  //Execute the query

  mysqli_query($connect, "INSERT INTO thedatas (name,email,textbox)
  				VALUES('$name','$email','$text')");

  if(mysqli_affected_rows($connect)>0){
    echo "<p>Form submitted!</p>";
    echo "<a href="index.php">Go Back</a>";
  }else{
    echo "Form failed to submit";
    echo mysqli_eror ($connect);
  }
?>
