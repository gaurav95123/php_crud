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


            <=======jquery validation=========>

               
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


   <title>PHP CRUD Application</title>
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
         <form action="" method="post" id="equipment-form">
            <div class="row">
               <div class="form-group">
                  <label class="form-label">PM Number:</label>
                  <input type="text" class="form-control" name="pmnumber" id="pmnumbers" placeholder="">
                  <span id="pmnumber-error" class="text-danger"></span>
                </div> 
                 <div class="form-group">
                  <label class="form-label">Equipment Code:</label>
                  <input type="text" class="form-control" name="equcode" id="equcodes" placeholder="">
                  <span id="equcodes-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Make:</label>
                  <input type="text" class="form-control" name="make" id="makes" placeholder="">
                  <span id="makes-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Equipment Name:</label>
                  <input type="text" class="form-control" name="equname" placeholder="" id="equnames">
                  <span id="equname-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Belts:</label>
                  <input type="text" class="form-control" name="belts" id="beltss" placeholder="">
                  <span id="belts-error" class="text-danger"></span>
               </div> 
                 <div class="form-group">
                  <label class="form-label">Site:</label>
                  <input type="text" class="form-control" name="site" id="sites" placeholder="">
                  <span id="site-error" class="text-danger"></span>
               </div> 
                 <div class="form-group">
                  <label class="form-label">Location:</label>
                  <input type="text" class="form-control" name="location" id="locations" placeholder="">
                  <span id="location-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">PPM Job Description To be filled by Enginee:</label>
                  <input type="text" class="form-control" name="ppmjobdesc" id="ppmjobdescs" placeholder="">
                  <span id="ppmjobdesc-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">1° Safety Check: Maintanance work carried out and complete:</label>
                  <input type="text" class="form-control" name="scheck1" id="scheck1s" placeholder="">
                  <span id="scheck1-error" class="text-danger"></span>
               </div> 
                 <div class="form-group">
                  <label class="form-label">2° Safety Check: Any residual debris from maintenance work removed and cleared (Free from screws, metal)</label>
                  <input type="text" class="form-control" name="scheck2"  id="scheck2s" placeholder="">
                  <span id="scheck2-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">3° Safety Check: Equipment wiped cleaned and sanitize</label>
                  <input type="text" class="form-control" name="scheck3" id="scheck3s" placeholder="">
                  <span id="scheck3-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">4° Safety Check: Equipment in good working order and ready for food safety operation</label>
                  <input type="text" class="form-control" name="scheck4" id="scheck4" placeholder="">
                  <span id="scheck4-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Enginner Name:</label>
                  <input type="text" class="form-control" name="engname" id="engnames" placeholder="">
                  <span id="engnames-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Production Stop required?</label>
                  <input type="text" class="form-control" name="prostopreq" id="prostopreqs" placeholder="">
                  <span id="prostopreq-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Start Date & Time</label>
                  <input type="text" class="form-control" name="startdatetime" id="startdatetimes" placeholder="">
                  <span id="startdatetimes-error" class="text-danger"></span>

               </div>   
               <div class="form-group">
                  <label class="form-label">End Date & Time:</label>
                  <input type="text" class="form-control" name="enddatetime"  id="enddatetimes"placeholder="">
                  <span id="enddatetime-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Frequency:</label>
                  <input type="text" class="form-control" name="frequency" id="frequencys" placeholder="">
                  <span id="frequency-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Previous date of Maintenance</label>
                  <input type="text" class="form-control" name="prevdatemaintenance" id="prevdatemaintenances" placeholder="">
                  <span id="prevdatemaintenance-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Next date of Maintenance</label>
                  <input type="text" class="form-control" name="nextdatemaintenance" id="nextdatemaintenances" placeholder="">
                  <span id="nextdatemaintenance-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> JAN:</label>
                  <input type="text" class="form-control" name="jan"  id="jans"placeholder="">
                  <span id="jan-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> FEB:</label>
                  <input type="text" class="form-control" name="feb" id="febs" placeholder="">
                  <span id="feb-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> MAR:</label>
                  <input type="text" class="form-control" name="mar" id="mars" placeholder="">
                  <span id="mar-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">APR:</label>
                  <input type="text" class="form-control" name="apr" id="aprs" placeholder="">
                  <span id="apr-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> MAY:</label>
                  <input type="text" class="form-control" name="may" id="mays" placeholder="">
                  <span id="may-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> JUNE:</label>
                  <input type="text" class="form-control" name="jun"  id="juns"placeholder="">
                  <span id="jun-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> JULY:</label>
                  <input type="text" class="form-control" name="jul" id="juls">
                  <span id="jul-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> AUG:</label>
                  <input type="text" class="form-control" name="aug" id="augs" placeholder="">
                  <span id="aug-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> SEP:</label>
                  <input type="text" class="form-control" name="sep" id="seps" placeholder="">
                  <span id="sep-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> OCT:</label>
                  <input type="text" class="form-control" name="oct" id="octs" placeholder="">
                  <span id="oct-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> NOV:</label>
                  <input type="text" class="form-control" name="nov" id="novs" placeholder="">
                  <span id="nov-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> DEC:</label>
                  <input type="text" class="form-control" name="dec"  id="decs" placeholder="">
                  <span id="dec-error" class="text-danger"></span>

               </div> 
               <div>
               <button type="submit d-flex justify-content-center m-10" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div> 
         </form>
      </div> 
   </div> 
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script>
      $(document).ready(function () {
         $("#equipment-form").submit(function (e) {
            // Clear previous error messages
            $("text-danger").html("");
            // Perform your custom validation here
            var pmnumber = $("#pmnumbers").val();
            var pmnumber = $("#equcodes").val();
            // var pmnumber = $("#pmnumbers").val();
            if (pmnumber.trim() === "") {
               $("#pmnumber-error").html("PM Number is required.");
               e.preventDefault(); // Prevent form submission
            }
             if (pmnumber.trim() === "") {
               $("#equcodes-error").html("Equipment is required.");
               e.preventDefault(); // Prevent form submission
            }

         });
      });
   </script>
</body>

</html>




office===>
               
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


   <title>PHP CRUD Application</title>
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
         <form action="" method="post" id="equipment-form">
            <div class="row">
               <div class="form-group">
                  <label class="form-label">PM Number:</label>
                  <input type="text" class="form-control" name="pmnumber" id="pmnumbers" placeholder="">
                  <span id="pmnumber-error" class="text-danger"></span>
                </div> 
                 <div class="form-group">
                  <label class="form-label">Equipment Code:</label>
                  <input type="text" class="form-control" name="equcode" id="equcodes" placeholder="">
                  <span id="equcodes-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Make:</label>
                  <input type="text" class="form-control" name="make" id="makes" placeholder="">
                  <span id="makes-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Equipment Name:</label>
                  <input type="text" class="form-control" name="equname" placeholder="" id="equnames">
                  <span id="equname-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Belts:</label>
                  <input type="text" class="form-control" name="belts" id="beltss" placeholder="">
                  <span id="belts-error" class="text-danger"></span>
               </div> 
                 <div class="form-group">
                  <label class="form-label">Site:</label>
                  <input type="text" class="form-control" name="site" id="sites" placeholder="">
                  <span id="site-error" class="text-danger"></span>
               </div> 
                 <div class="form-group">
                  <label class="form-label">Location:</label>
                  <input type="text" class="form-control" name="location" id="locations" placeholder="">
                  <span id="location-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">PPM Job Description To be filled by Enginee:</label>
                  <input type="text" class="form-control" name="ppmjobdesc" id="ppmjobdescs" placeholder="">
                  <span id="ppmjobdesc-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">1° Safety Check: Maintanance work carried out and complete:</label>
                  <input type="text" class="form-control" name="scheck1" id="scheck1s" placeholder="">
                  <span id="scheck1-error" class="text-danger"></span>
               </div> 
                 <div class="form-group">
                  <label class="form-label">2° Safety Check: Any residual debris from maintenance work removed and cleared (Free from screws, metal)</label>
                  <input type="text" class="form-control" name="scheck2"  id="scheck2s" placeholder="">
                  <span id="scheck2-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">3° Safety Check: Equipment wiped cleaned and sanitize</label>
                  <input type="text" class="form-control" name="scheck3" id="scheck3s" placeholder="">
                  <span id="scheck3-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">4° Safety Check: Equipment in good working order and ready for food safety operation</label>
                  <input type="text" class="form-control" name="scheck4" id="scheck4" placeholder="">
                  <span id="scheck4-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Enginner Name:</label>
                  <input type="text" class="form-control" name="engname" id="engnames" placeholder="">
                  <span id="engnames-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Production Stop required?</label>
                  <input type="text" class="form-control" name="prostopreq" id="prostopreqs" placeholder="">
                  <span id="prostopreq-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Start Date & Time</label>
                  <input type="text" class="form-control" name="startdatetime" id="startdatetimes" placeholder="">
                  <span id="startdatetimes-error" class="text-danger"></span>

               </div>   
               <div class="form-group">
                  <label class="form-label">End Date & Time:</label>
                  <input type="text" class="form-control" name="enddatetime"  id="enddatetimes"placeholder="">
                  <span id="enddatetime-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Frequency:</label>
                  <input type="text" class="form-control" name="frequency" id="frequencys" placeholder="">
                  <span id="frequency-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Previous date of Maintenance</label>
                  <input type="text" class="form-control" name="prevdatemaintenance" id="prevdatemaintenances" placeholder="">
                  <span id="prevdatemaintenance-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">Next date of Maintenance</label>
                  <input type="text" class="form-control" name="nextdatemaintenance" id="nextdatemaintenances" placeholder="">
                  <span id="nextdatemaintenance-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> JAN:</label>
                  <input type="text" class="form-control" name="jan"  id="jans"placeholder="">
                  <span id="jan-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> FEB:</label>
                  <input type="text" class="form-control" name="feb" id="febs" placeholder="">
                  <span id="feb-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> MAR:</label>
                  <input type="text" class="form-control" name="mar" id="mars" placeholder="">
                  <span id="mar-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label">APR:</label>
                  <input type="text" class="form-control" name="apr" id="aprs" placeholder="">
                  <span id="apr-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> MAY:</label>
                  <input type="text" class="form-control" name="may" id="mays" placeholder="">
                  <span id="may-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> JUNE:</label>
                  <input type="text" class="form-control" name="jun"  id="juns"placeholder="">
                  <span id="jun-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> JULY:</label>
                  <input type="text" class="form-control" name="jul" id="juls">
                  <span id="jul-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> AUG:</label>
                  <input type="text" class="form-control" name="aug" id="augs" placeholder="">
                  <span id="aug-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> SEP:</label>
                  <input type="text" class="form-control" name="sep" id="seps" placeholder="">
                  <span id="sep-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> OCT:</label>
                  <input type="text" class="form-control" name="oct" id="octs" placeholder="">
                  <span id="oct-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> NOV:</label>
                  <input type="text" class="form-control" name="nov" id="novs" placeholder="">
                  <span id="nov-error" class="text-danger"></span>

               </div> 
                 <div class="form-group">
                  <label class="form-label"> DEC:</label>
                  <input type="text" class="form-control" name="dec"  id="decs" placeholder="">
                  <span id="dec-error" class="text-danger"></span>

               </div> 
               <div>
               <button type="submit d-flex justify-content-center m-10" class="btn btn-success" name="submit">Save</button>
               <a href="index.php" class="btn btn-danger">Cancel</a>
            </div> 
         </form>
      </div> 
   </div> 
   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

   <!-- jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script>
      $(document).ready(function () {
         $("#equipment-form").submit(function (e) {
            // Clear previous error messages
            $("text-danger").html("");
            // Perform your custom validation here
            var pmnumber = $("#pmnumbers").val();
            var pmnumber = $("#equcodes").val();
            var pmnumber = $("#makes").val();
            var pmnumber = $("#equnames").val();
            var pmnumber = $("#beltss").val();
            var pmnumber = $("#sites").val();
            var pmnumber = $("#locations").val();
            var pmnumber = $("#ppmjobdescs").val();
            var pmnumber = $("#scheck1s").val();
            var pmnumber = $("#scheck2s").val();
            var pmnumber = $("#scheck3s").val();
            var pmnumber = $("#scheck4").val();
            var pmnumber = $("#engnames").val();
            var pmnumber = $("#prostopreqs").val();
            var pmnumber = $("#startdatetimes").val();
            var pmnumber = $("#enddatetimes").val();
            var pmnumber = $("#frequencys").val();
            var pmnumber = $("#prevdatemaintenances").val();
            var pmnumber = $("#nextdatemaintenance").val();




            // var pmnumber = $("#pmnumbers").val();
            if (pmnumber.trim() === "") {
               $("#pmnumber-error").html("PM Number is required.");
               e.preventDefault(); // Prevent form submission
            }
             if (pmnumber.trim() === "") {
               $("#equcodes-error").html("Equipment is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#makes-error").html("Makes is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#equname-error").html("Equipment Name is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#belts-error").html("Belts is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#site-error").html("Site is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#location-error").html("Location is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#ppmjobdesc-error").html("PPM Job Description is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#scheck1-error").html("1° Safety Check is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#scheck2-error").html("2° Safety Check is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#scheck2-error").html("2° Safety Check is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#scheck3-error").html("3° Safety Check is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#scheck4-error").html("4° Safety Check is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#engnames-error").html("Enginner Name  is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#prostopreq-error").html("Production Stop  is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#startdatetimes-error").html("Start Date & Time  is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#enddatetime-error").html("End Date & Time is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#frequency-error").html("Frequency is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#prevdatemaintenance-error").html("Previous date is required.");
               e.preventDefault(); // Prevent form submission
            }
            if (pmnumber.trim() === "") {
               $("#nextdatemaintenance-error").html("Next date  & Time is required.");
               e.preventDefault(); // Prevent form submission
            }


         });
      });
   </script>
</body>

</html>
