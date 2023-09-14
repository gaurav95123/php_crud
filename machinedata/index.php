<?php
include "connect.php";
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

  <title>Machine Equipment </title>
</head>

<body>
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #00ff5573;">
    Machine Equipment
  </nav>

  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add.php" class="btn btn-dark mb-3">Add New</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
                      <th>ID</th>
                <th>PM Number</th>
                <th>Equipment Code</th>
                <th>Make</th>
                <th>Equipment Name</th>
                <th>Belts</th>
                <th>Site</th>
                <th>Location</th>
                <th>PPM Job Description To be filled by Enginee</th>
                <th>1° Safety Check: Maintanance work carried out and complete</th>
                <th>2° Safety Check: Any residual debris from maintenance work removed and cleared (Free from screws, metal)</th>
                <th>3° Safety Check: Equipment wiped cleaned and sanitize</th>
                <th>4° Safety Check: Equipment in good working order and ready for food safety operation</th>
                <th>Enginner Name</th>
                <th>Production Stop required?</th>
                <th>Start Date & Time</th>
                <th>End Date & Time</th>
                <th>Frequency</th>
                <th>Previous date of Maintenance</th>
                <th>Next date of Maintenance</th>
                <th>JAN</th>
                <th>FEB</th>
                <th>MAR</th>
                <th>APR</th>
                <th>MAY</th>
                <th>JUNE</th>
                <th>JULY</th>
                <th>AUG</th>
                <th>SEP</th>
                <th>OCT</th>
                <th>NOV</th>
                <th>DEC</th>
                <th>ACTION</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `machine_data`";
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
          <td><?php echo $row['Id']; ?></td>
                            <td><?php echo $row['pmnumber']; ?></td>
                            <td><?php echo $row['equcode']; ?></td>
                            <td><?php echo $row['make']; ?></td>
                            <td><?php echo $row['equname']; ?></td>
                            <td><?php echo $row['belts']; ?></td>
                            <td><?php echo $row['site']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['ppmjobdesc']; ?></td>
                            <td><?php echo $row['scheck1']; ?></td>
                            <td><?php echo $row['scheck2']; ?></td>
                            <td><?php echo $row['scheck3']; ?></td>
                            <td><?php echo $row['scheck4']; ?></td>
                            <td><?php echo $row['engname']; ?></td>
                            <td><?php echo $row['prostopreq']; ?></td>
                            <td><?php echo $row['startdatetime']; ?></td>
                            <td><?php echo $row['enddatetime']; ?></td>
                            <td><?php echo $row['frequency']; ?></td>
                            <td><?php echo $row['prevdatemaintenance']; ?></td>
                            <td><?php echo $row['nextdatemaintenance']; ?></td>
                            <td><?php echo $row['jan']; ?></td>
                            <td><?php echo $row['feb']; ?></td>
                            <td><?php echo $row['mar']; ?></td>
                            <td><?php echo $row['apr']; ?></td>
                            <td><?php echo $row['may']; ?></td>
                            <td><?php echo $row['jun']; ?></td>
                            <td><?php echo $row['jul']; ?></td>
                            <td><?php echo $row['aug']; ?></td>
                            <td><?php echo $row['sep']; ?></td>
                            <td><?php echo $row['oct']; ?></td>
                            <td><?php echo $row['nov']; ?></td>
                            <td><?php echo $row['dec']; ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row["Id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="delete.php?id=<?php echo $row["Id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>