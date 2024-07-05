<?php session_start() ?>

<?php if(!isset($_SESSION['user'])){
    header("Location: request.php");
    exit();
} ?>

<?php
require_once ('../php/user/connection.php');
require_once ('../php/user/functions.php');
$blood_groups = getBloodGroup($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/request.css" rel="stylesheet">
    <title>Request Blood</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!--<img class="bg-image" src="assets/images/istockphoto-1338751268-612x612.jpg">-->
    <div class="container-fluid">
        <header class="text-center">
            <h1 class="display-6">Request For Blood</h1>
        </header>

    </div>
    <section class="container my-2  w-50 text-light p-2">
        <form class="row g-3" action="../php/user/blood_formHandler.php" method="POST">
            <div class="col-12">
                <label for="inputName" class="form-label">User Name</label>
                <input type="text" name="name" class="form-control" id="inputUname" value="<?php echo($_SESSION['name']) ?>">
            </div>
            <div class="col-12">
                <label for="inputAddress" class="form-label">Hospital Address</label>
                <input type="text" name="Haddress" class="form-control" id="inputAddress">
            </div>
            <div class="col-12">
                <label for="inputAddress2" class="form-label">Reason For Blood Request</label>
                <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                <label for="dob" class="form-label">When is it Required?</label>
                <input type="date" name="date" class="form-control" required>
            </div>
            <div class="col-12">
                <label for="inputState" class="form-label">Blood Group</label>
                <select id="inputState" name="blood_group" class="form-select">
                    <option selected>Blood Group</option>
                    <?php foreach ($blood_groups as $bloodgroup) { ?>
                        <option value="<?php echo ($bloodgroup['id']) ?>"><?php echo ($bloodgroup['type']) ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        I am Eligible...
                    </label>
                </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btnrqst">Send Request</button>
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