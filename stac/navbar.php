<?php

$tutor_sql = "SELECT * FROM tutorgroup";
$tutor_qry = mysqli_query($dbconnect, $tutor_sql);
$tutor_aa = mysqli_fetch_assoc($tutor_qry);
 ?>
<div class="col-2">
<div class="dashboard">


 <a href="index.php"><h5>St Andrew's College</h5></a>

<a href="index.php?page=studentmang">Manage Students</a>
 <p>Tutor Groups</p>
<a href="index.php?page=addtutor">NEW</a>

 <?php
 $background=0;
   do {

     $tutorgroupID = $tutor_aa['tutorgroupID'];
     $tutorcode = $tutor_aa['tutorcode'];
     $tutor = $tutor_aa['tutor'];

     if($background==0) {
       echo "<div class='bg-white'>";
     } else {
       echo "<div class='bg-grey'>";
     }

     echo nl2br ("<a href='index.php?page=tutorgroup&tutorgroupID=$tutorgroupID&tutorcode=$tutorcode&tutor=$tutor'>$tutorcode \n</a>");

     if($background==0) {
       $background=1;
     } else {
       $background=0;
     }
     echo "</div>";
    } while ($tutor_aa = mysqli_fetch_assoc($tutor_qry))
 ?>

</div>
</div>
