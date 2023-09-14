<?php
include "connect.php";

if (isset($_POST["submit"])) {
$pmnumber = $_POST["pmnumber"];
$equcode = $_POST["equcode"];
$make = $_POST["make"];
$equname = $_POST["equname"];
$belts = $_POST["belts"];
$site = $_POST["site"];
$location = $_POST["location"];
$ppmjobdesc = $_POST["ppmjobdesc"];
$scheck1 = $_POST["scheck1"];
$scheck2 = $_POST["scheck2"];
$scheck3 = $_POST["scheck3"];
$scheck4 = $_POST["scheck4"];
$engname = $_POST["engname"];
$prostopreq = $_POST["prostopreq"];
$startdatetime = $_POST["startdatetime"];
$enddatetime = $_POST["enddatetime"];
$frequency = $_POST["frequency"];
$prevdatemaintenance = $_POST["prevdatemaintenance"];
$nextdatemaintenance = $_POST["nextdatemaintenance"];
$jan = $_POST["jan"];
$feb = $_POST["feb"];
$mar = $_POST["mar"];
$apr = $_POST["apr"];
$may = $_POST["may"];
$jun = $_POST["jun"];
$jul = $_POST["jul"];
$aug = $_POST["aug"];
$sep = $_POST["sep"];
$oct = $_POST["oct"];
$nov = $_POST["nov"];
$dec = $_POST["dec"];

   $sql = "INSERT INTO machine_data (pmnumber, equcode, make, equname, belts, site, location, ppmjobdesc, scheck1, scheck2, scheck3, scheck4, engname, prostopreq, startdatetime, enddatetime, frequency, prevdatemaintenance, nextdatemaintenance, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
 ('$pmnumber', '$equcode', '$make', '$equname', '$belts', '$site', '$location', '$ppmjobdesc', '$scheck1', '$scheck2', '$scheck3', '$scheck4', '$engname', '$prostopreq', '$startdatetime', '$enddatetime', '$frequency', '$prevdatemaintenance', '$nextdatemaintenance', '$jan', '$feb', '$mar', '$apr', '$may', '$jun', '$jul', '$aug', '$sep', '$oct', '$nov', '$dec')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: index.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>machine</title>
</head>

<body>
   <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
      Add New Equipment
   </nav>

   <div class="container ">
      <div class="text-center mb-4">
         <h3>Add New Equipment</h3>
         <p class="text-muted">Add New Equipment</p>
      </div> 

      <div class="container ">
         <form action="" method="post">
            <div class="row">
               <div class="col">
                  <label class="form-label">PM Number:</label>
                  <input type="text" class="form-control" name="pmnumber" placeholder="">
                </div> <br><br>
                 <div class="col">
                  <label class="form-label">Equipment Code:</label>
                  <input type="text" class="form-control" name="equcode" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Make:</label>
                  <input type="text" class="form-control" name="make" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Equipment Name:</label>
                  <input type="text" class="form-control" name="equname" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Belts:</label>
                  <input type="text" class="form-control" name="belts" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Site:</label>
                  <input type="text" class="form-control" name="site" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Location:</label>
                  <input type="text" class="form-control" name="location" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">PPM Job Description To be filled by Enginee:</label>
                  <input type="text" class="form-control" name="ppmjobdesc" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">1° Safety Check: Maintanance work carried out and complete:</label>
                  <input type="text" class="form-control" name="scheck1" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">2° Safety Check: Any residual debris from maintenance work removed and cleared (Free from screws, metal)</label>
                  <input type="text" class="form-control" name="scheck2" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">3° Safety Check: Equipment wiped cleaned and sanitize</label>
                  <input type="text" class="form-control" name="scheck3" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">4° Safety Check: Equipment in good working order and ready for food safety operation</label>
                  <input type="text" class="form-control" name="scheck4" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Enginner Name:</label>
                  <input type="text" class="form-control" name="engname" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Production Stop required?</label>
                  <input type="text" class="form-control" name="prostopreq" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Start Date & Time</label>
                  <input type="text" class="form-control" name="startdatetime" placeholder="">
               </div> <br><br>  
               <div class="col">
                  <label class="form-label">End Date & Time:</label>
                  <input type="text" class="form-control" name="enddatetime" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Frequency:</label>
                  <input type="text" class="form-control" name="frequency" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Previous date of Maintenance</label>
                  <input type="text" class="form-control" name="prevdatemaintenance" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Next date of Maintenance</label>
                  <input type="text" class="form-control" name="nextdatemaintenance" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> JAN:</label>
                  <input type="text" class="form-control" name="jan" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> FEB:</label>
                  <input type="text" class="form-control" name="feb" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> MAR:</label>
                  <input type="text" class="form-control" name="mar" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">APR:</label>
                  <input type="text" class="form-control" name="apr" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> MAY:</label>
                  <input type="text" class="form-control" name="may" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> JUNE:</label>
                  <input type="text" class="form-control" name="jun" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> JULY:</label>
                  <input type="text" class="form-control" name="jul" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> AUG:</label>
                  <input type="text" class="form-control" name="aug" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> SEP:</label>
                  <input type="text" class="form-control" name="sep" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> OCT:</label>
                  <input type="text" class="form-control" name="oct" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> NOV:</label>
                  <input type="text" class="form-control" name="nov" placeholder="">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> DEC:</label>
                  <input type="text" class="form-control" name="dec" placeholder="">
               </div> <br><br>
               <div>
               <button type="submit d-flex justify-content-center m-10" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div> 
         </form>
      </div> 
   </div> 

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
