<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Join us</title>
</head>
<body>
    <div>
        <h4> How to join Us </h4>
        <p> Inorder to join us, you need to meet the following criteria before filling the form below... </p>
        <ol>
            <li>You need to follow proper ettiquette with clients.</li>
            <li>You need to have proper training in respective field of interest.</li>
            <li>Atleast 10 months working experience with recommendations from previous employer or clients.</li>
        </ol> 
        <p>If you meet the qualifications, please fill in the form below</p>

        <h5>Job Application</h5>

        <form class="row g-3" method="post">
            <div class="col-md-6">
                <label for="inputName4" class="form-label">Name</label>
                <input type="name" name="Fname" class="form-control" id="inputName4">
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Email</label>
                <input type="email" name="Email" class="form-control" id="inputEmail4">
            </div>
            <div class="col-6">
                <label for="inputNum" class="form-label">Phone Number</label>
                <input type="text" name="Number" class="form-control" id="inputNum" placeholder="0700-000-000" pattern="[0-9]{4}-[0-9]{3}-[0-9]{3}" required>
            </div>
            <div class="col-md-4">
                <label for="inputPos" class="form-label">Position of Application</label>
                <select id="inputPos" name="Position" class="form-select">
                    <option selected>...</option>
                    <option>Cleaner</option>
                    <option>Driver</option>
                    <option>Managerial</option>
                    <option>Marketing</option>
                    <option>Finance</option>
                </select>
            </div>
            <div class="col-6">
                <label for="inputFile" class="form-label"> CV and Cover Letter </label>
                <input type="file" class="form-control" name="file" id="inputFIle" placeholder="Upload File">
            </div>
            <!-- <div class="col-6">
                <label for="inputDate" class="form-label">Preferred date of Interview </label>
                <input type="date" name="theDate" class="form-control" id="inputDate" placeholder="Date of interview">
            </div> -->
            <div class="col-12">
                <button type="submit" name = "join" class="btn btn-primary">Apply now</button>
            </div>
        </form>
    </div>
</body>
</html>

<?php 
    if (isset($_POST['join'])) {
  
      $name = $_POST['Fname'];
      $email = $_POST['Email'];
      $number = $_POST['Number'];
      $position = $_POST['Position'];
      //$date = $_POST['theDate'];
  
      include_once "db-connect.php";
  
      $sql = "INSERT INTO applicant(name, email, position, number) VALUES ('$Fname','$Email','$Position','$Number')";
      $db_connect -> query($sql);
  
      if ($db_connect -> query($sql) === TRUE) {
        echo "Application received";
      }
      else {
        echo $db_connect -> error;
      }
    }
?>