<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>
<form class="row g-3" method="post";>
  <div class="col-md-6">
    <label for="inputName4" class="form-label">Name</label>
    <input type="name" name="yourName" class="form-control">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" name="yourEmail" class="form-control">
  </div>
  <div class="col-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" name="theCity" class="form-control" placeholder="City of residence">
  </div>
  <div class="col-md-4">
    <label for="inputTown" class="form-label">Town</label>
    <select name="theTown" class="form-select">
      <option selected>Choose your Town...</option>
      <option>Nairobi-CBD</option>
      <option>Juja</option>
    </select>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Address </label>
    <input type="text" class="form-control" name="yourAddress" placeholder="Postal address">
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" name="yourZip" class="form-control" placeholder= "Postal code">
  </div>
  <div class="col-md-6">
    <label for="inputService" class="form-label">Select the service</label>
    <select name="service" class="form-select">
      <option selected>Choose...</option>
      <option>General house cleaning</option>
      <option>Vacuuming</option>
      <option>Compound maintenance</option>
      <option>Floor tiles whitening</option>
      <option>Window cleaning</option>
      <option>Hedge and surrounding plants maintenance</option>
    </select>
  </div>
  <!-- <div class="col-6">
    <label for="inputDate" class="form-label">Preferred date of service </label>
    <input type="date" name="theDate" class="form-control" id="inputDate" placeholder="Date of service">
  </div> -->
  <div class="col-12">
    <button type="submit" name = "book" class="btn btn-primary">Book now</button>
  </div>
</form>
</body>
</html>


<?php 
  if (isset($_POST['book'])) {

    $name = $_POST['yourName'];
    $email = $_POST['yourEmail'];
    $city = $_POST['theCity'];
    $town = $_POST['theTown'];
    $address = $_POST['yourAddress'];
    $zip = $_POST['yourZip'];
    $service = $_POST['service'];
    //$date = $_POST['theDate'];

    include_once "db-connect.php";

    $sql = "INSERT INTO booking(name, email, city, town, service, zip, address) VALUES ('$yourName','$yourEmail','$theCity','$theTown','$service','$yourZip','$yourAddress')";
    $db_connect -> query($sql);

    if ($db_connect -> query($sql) === TRUE) {
      echo "Booking successful";
    }
    else {
      echo $db_connect -> error;
    }
  }
?>
