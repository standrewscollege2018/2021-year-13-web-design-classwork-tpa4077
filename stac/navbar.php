<?php

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
 ?>

<div class="col-2">

 <a href="index.php"><h5>St Andrew's College</h5></a>
<form class="" action="index.php?page=searchresults" method="post">
  <input required type="text" name="search" placeholder="Student name">
  <button type="submit" name="button">Search</button>
</form>

 <p>Tutor Groups</p>
<a href="index.php?page=addtutor">NEW</a>

 <?php
 $background=0;
   do {
     $tutorgroupID = $tutor_aa['tutorgroupID'];
     $tutorcode = $tutor_aa['tutorcode'];

     if($background==0) {
       echo "<div class='bg-white'>";
     } else {
       echo "<div class='bg-grey'>";
     }

     echo nl2br ("<a href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode'>$tutorcode \n</a>");

     if($background==0) {
       $background=1;
     } else {
       $background=0;
     }
     echo "</div>";
    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
 ?>

</div>
