<?php
require_once ("../php/user/connection.php");
$sql = "SELECT * FROM messages";
$result = $conn->query($sql);
$messages = $result->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/tables.css" rel="stylesheet">
    <title>Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Icons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
</head>

<body>
    <!--Table-->
    <div class="container">
        <div class="row mb-3">
            <div class="col mt-3">
                <h1 class="tabletitle">Messages</h1>
            </div>
            <div class="col text-end mt-3">
                <a href="home.html">
                    <button class="btn btn-secondary"><i class="ri-arrow-go-back-line me-1"></i>Back</button>
                </a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Message</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="donorTableBody">
                            <?php if (!empty($messages)) { ?>
                                <?php foreach ($messages as $message) { ?>
                                    <tr>
                                        <td><?php echo $message['name']; ?></td>
                                        <td><?php echo $message['email']; ?></td>
                                        <td><?php echo $message['message']; ?></td>
                                        <td>
                                            <a href="../php/admin/deleteMessage.php?id=<?php echo $message['id']; ?>">
                                                <i class="ri-delete-bin-6-line"></i>
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            <?php } else { ?>
                                <tr>
                                    <td colspan="5">No messages available.</td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>