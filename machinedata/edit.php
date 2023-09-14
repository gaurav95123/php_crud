<?php
include "connect.php";
$id = $_GET["id"];

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


$sql="UPDATE `machine_data` SET `pmnumber`='$pmnumber',`equcode`='$equcode',`make`='$make',`equname`='$equname',`belts`='$belts',`site`='$site',`location`='$location',`ppmjobdesc`='$ppmjobdesc',`scheck1`='$scheck1',`scheck2`='$scheck2',`scheck3`='$scheck3',`scheck4`='$scheck4',`engname`='$engname',`prostopreq`='$prostopreq',`startdatetime`='$startdatetime',`enddatetime`='$enddatetime',`frequency`='$frequency',`prevdatemaintenance`='$prevdatemaintenance',`nextdatemaintenance`='$nextdatemaintenance',`jan`='$jan',`feb`='$feb',`mar`='$mar',`apr`='$apr',`may`='$may',`jun`='$jun',`jul`='$jul',`aug`='$aug',`sep`='$sep',`oct`='$oct',`nov`='$nov',`dec`='$dec'WHERE id = $id";



//   $sql = "UPDATE `crud` SET `first_name`='$first_name',`last_name`='$last_name',`email`='$email',`gender`='$gender' WHERE id = $id";

  $result = mysqli_query($conn, $sql);

  if ($result) {
    header("Location: index.php?msg=Data updated successfully");
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
    PHP Complete CRUD Application
  </nav>

  <div class="container">
    <div class="text-center mb-4">
      <h3>Edit User Information</h3>
      <p class="text-muted">Click update after changing any information</p>
    </div>

    <?php
    $sql = "SELECT * FROM `machine_data` WHERE id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    ?>

    <div class="container d-flex justify-content-center">
      <form action="" method="post" style="width:50vw; min-width:300px;">
        <div class="row mb-3">
            <div class="row">
               <div class="col">
                  <label class="form-label">PM Number:</label>
                  <input type="text" class="form-control" name="pmnumber" value="<?php echo $row['pmnumber'] ?>">
                </div> <br><br>
                 <div class="col">
                  <label class="form-label">Equipment Code:</label>
                  <input type="text" class="form-control" name="equcode"     value="<?php echo $row['equcode'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Make:</label>
                  <input type="text" class="form-control" name="make"    value="<?php echo $row['make'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Equipment Name:</label>
                  <input type="text" class="form-control" name="equname"     value="<?php echo $row['equname'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Belts:</label>
                  <input type="text" class="form-control" name="belts"   value="<?php echo $row['belts'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Site:</label>
                  <input type="text" class="form-control" name="site"    value="<?php echo $row['site'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Location:</label>
                  <input type="text" class="form-control" name="location"    value="<?php echo $row['location'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">PPM Job Description To be filled by Enginee:</label>
                  <input type="text" class="form-control" name="ppmjobdesc"      value="<?php echo $row['ppmjobdesc'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">1° Safety Check: Maintanance work carried out and complete:</label>
                  <input type="text" class="form-control" name="scheck1"     value="<?php echo $row['scheck1'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">2° Safety Check: Any residual debris from maintenance work removed and cleared (Free from screws, metal)</label>
                  <input type="text" class="form-control" name="scheck2"     value="<?php echo $row['scheck2'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">3° Safety Check: Equipment wiped cleaned and sanitize</label>
                  <input type="text" class="form-control" name="scheck3"     value="<?php echo $row['scheck3'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">4° Safety Check: Equipment in good working order and ready for food safety operation</label>
                  <input type="text" class="form-control" name="scheck4"     value="<?php echo $row['scheck4'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Enginner Name:</label>
                  <input type="text" class="form-control" name="engname"     value="<?php echo $row['engname'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Production Stop required?</label>
                  <input type="text" class="form-control" name="prostopreq"      value="<?php echo $row['prostopreq'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Start Date & Time</label>
                  <input type="text" class="form-control" name="startdatetime"   value="<?php echo $row['startdatetime'] ?>">
               </div> <br><br>  
               <div class="col">
                  <label class="form-label">End Date & Time:</label>
                  <input type="text" class="form-control" name="enddatetime"     value="<?php echo $row['enddatetime'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Frequency:</label>
                  <input type="text" class="form-control" name="frequency"   value="<?php echo $row['frequency'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Previous date of Maintenance</label>
                  <input type="text" class="form-control" name="prevdatemaintenance"     value="<?php echo $row['prevdatemaintenance'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">Next date of Maintenance</label>
                  <input type="text" class="form-control" name="nextdatemaintenance"     value="<?php echo $row['nextdatemaintenance'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> JAN:</label>
                  <input type="text" class="form-control" name="jan"     value="<?php echo $row['jan'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> FEB:</label>
                  <input type="text" class="form-control" name="feb"     value="<?php echo $row['feb'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> MAR:</label>
                  <input type="text" class="form-control" name="mar"     value="<?php echo $row['mar'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label">APR:</label>
                  <input type="text" class="form-control" name="apr"     value="<?php echo $row['apr'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> MAY:</label>
                  <input type="text" class="form-control" name="may"     value="<?php echo $row['may'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> JUNE:</label>
                  <input type="text" class="form-control" name="jun"     value="<?php echo $row['jun'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> JULY:</label>
                  <input type="text" class="form-control" name="jul"     value="<?php echo $row['jul'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> AUG:</label>
                  <input type="text" class="form-control" name="aug"     value="<?php echo $row['aug'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> SEP:</label>
                  <input type="text" class="form-control" name="sep"     value="<?php echo $row['sep'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> OCT:</label>
                  <input type="text" class="form-control" name="oct"     value="<?php echo $row['oct'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> NOV:</label>
                  <input type="text" class="form-control" name="nov"     value="<?php echo $row['nov'] ?>">
               </div> <br><br>
                 <div class="col">
                  <label class="form-label"> DEC:</label>
                  <input type="text" class="form-control" name="dec"     value="<?php echo $row['dec'] ?>">
               </div> <br><br>
        <div>
          <button type="submit" class="btn btn-success" name="submit">Update</button>
          <a href="index.php" class="btn btn-danger">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>