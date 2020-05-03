<?php
if ($_GET) {
   if ($_GET['isSuccess'] == 1) {
      //display thank you page
      $value = "Thank you for contacting  us !!<br> Your form has been submitted !!!!";
   } else if ($_GET['isSuccess'] == 0) {
      // success
      $value = "Could not write to the database. Sorry for the inconvenience!!!!!";
   } else {
      //data tempered
      $value = "There is some error. Sorry for the inconvenience!!!!!";
   }
} else {
   echo "Something wring there";
}
?>
<!DOCTYPE html>
<html>

<head>
   <title>Pest Control</title>
   <style>
      .divv {
         width: 500px;
         margin: auto;
         border: 3px solid #73AD21;
         position: absolute;
         top: calc(100% - 70%);
         left: calc(100% - 70%);
      }
   </style>

</head>

<body background="bug.jpg">
   <div class="divv" align="center" style="background-color:green">
      <p align="center"> <?php echo $value; ?> </p>
   </div>
</body>

</html>