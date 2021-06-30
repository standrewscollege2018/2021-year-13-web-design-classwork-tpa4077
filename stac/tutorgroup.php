<?php
echo "<div class='row'>";
if(!isset($_GET['tutorgroupID'])) {
  header("Location: index.php");
} else {
  $tutorcode = $_GET['tutorcode'];
  $tutorgroupID = $_GET['tutorgroupID'];
  $tutor = $_GET['tutor'];
  $tutor_sql = "SELECT * FROM student WHERE tutorgroupID=$tutorgroupID";
  $tutor_qry = mysqli_query($dbconnect, $tutor_sql);
  $tutor_aa = mysqli_fetch_assoc($tutor_qry);

  echo "<div class='col-12 py-3'>";
  echo "<h3>$tutorcode</h3>$tutor";
  echo "</div>";

  if(mysqli_num_rows($tutor_qry)==0) {
echo "</div>";
    echo "<p>No students in $tutor</p>";
echo "<div class='row'>";
  }

  else {

    do {

      $firstname = $tutor_aa['firstname'];
      $lastname = $tutor_aa['lastname'];
      $photo = $tutor_aa['photo'];

echo "<div class='col-3 text-center'>";
      echo "<img src='images/$photo' class='img-fluid'>";
      echo "<p>$firstname $lastname</p>";
echo "</div>";

    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry));
  }
}
echo "</div>";
?>
