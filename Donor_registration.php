<?php session_start() ?>
<?php
require_once ('php/user/connection.php');
require_once ('php/user/functions.php');
$blood_groups = getBloodGroup($conn);

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="CSS/registration.css" rel="stylesheet">
  <title>Donor Registration</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <!--<img class="bg-image" src="assets/images/istockphoto-1338751268-612x612.jpg">-->
  <div class="container-fluid">
    <header class="text-center">
      <h1 class="display-6">Register for Blood Donation. </h1>
    </header>

  </div>
  <section class="container my-2  w-50 text-light p-2">
    <form class="row g-3" action="php/user/donationHanlder.php" method="POST">
      <div class="col-md-4">
        <label for="validationCustom01" class="form-label">First name</label>
        <input type="text" class="form-control" id="validationCustom01" name="f_name" placeholder="Mark" required>
        <?php if (isset($_SESSION['error'])) { ?>
          <code style="color:red;"><?php echo ($_SESSION['error']) ?></code>
          <?php unset($_SESSION['error']);
        } ?>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustom02" class="form-label">Last name</label>
        <input type="text" class="form-control" name="l_name" id="validationCustom02" placeholder="Otto" required>
        <div class="valid-feedback">
          Looks good!
        </div>
      </div>
      <div class="col-md-4">
        <label for="validationCustomUsername" class="form-label">Username</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" name="username" id="validationCustomUsername"
            aria-describedby="inputGroupPrepend" required>
          <div class="invalid-feedback">
            Please choose a username.
          </div>
          <?php if (isset($_SESSION['Existerror'])) { ?>
          <code style="color:red;"><?php echo ($_SESSION['Existerror']) ?></code>
          <?php unset($_SESSION['Existerror']);
        } ?>
        </div>
      </div>
      <div class="col-md-6">
        <label for="inputEmail4" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" id="inputEmail4">
      </div>
      <div class="col-md-6">
        <label for="inputNumber" class="form-label">Phone number</label>
        <input type="text" name="tel" class="form-control" id="inputPassword4">
      </div>
      <div class="col-12">
        <label for="inputGender" class="form-label">Gender</label>
        <select id="inputState" name="gender" class="form-select">
          <option value="female" selected>Female</option>
          <option value="male">Male</option>
        </select>
        <label for="dob" class="form-label">Date of Birth:</label>
        <input type="date" id="dob" name="birth_date" class="form-control">

        <label for="inputAddress2" class="form-label">New Donor?</label>
        <select id="inputState" name="new_donor" class="form-select">
          <option selected>Yes</option>
          <option>No</option>
        </select>
      </div>
      <div class="col-12">
        <label for="inputState" class="form-label">Blood Group</label>
        <select id="inputState" name="blood_group" class="form-select">
          <option selected>Blood Group</option>
          <?php foreach ($blood_groups as $bloodgroup) { ?>
            <option value="<?php echo($bloodgroup['id']) ?>"><?php echo($bloodgroup['type']) ?></option>
          <?php } ?>
        </select>
      </div>
      </div>
      <div class="col-md-6">
        <label for="inputCity" class="form-label">City</label>
        <input type="text" name="city" class="form-control" id="inputCity">
      </div>
      <div class="col-md-4">
        <label for="inputZip" class="form-label">Postal-Code</label>
        <input type="text" name="postal_code" class="form-control" id="inputZip">

      </div>
      <div class="col-md-2">
        <label for="inputZip" class="form-label">Zip</label>
        <input type="text" name="zip" class="form-control" id="inputZip">
      </div>
      <div class="col-12">
        <div class="form-check">
          <input class="form-check-input" name="is_checked" type="checkbox" id="gridCheck">
          <label class="form-check-label" for="gridCheck">
            I am donating at free will..
          </label>
        </div>
        <?php if (isset($_SESSION['termError'])) { ?>
          <code style="color:red;"><?php echo ($_SESSION['termError']) ?></code>
          <?php unset($_SESSION['termError']);
        } ?>
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-primary">Register</button>
      </div>
    </form>
  </section>

  <!--ICONS-->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

  <!--BOOSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>