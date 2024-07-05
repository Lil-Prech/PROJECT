<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../CSS/tables.css" rel="stylesheet">
    <title>Donations</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
     integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Icons-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet"/>
</head>
<body>
    <!--table-->
    <div class="container">
        <div class="row mb-3">
            <div class="col mt-3">
                <h1 class="tabletitle">Blood Donations</h1>
            </div>
            <div class="col text-end mt-3">
                <a href="donor_dashboard.html">
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
                              <th scope="col">#</th>
                              <th scope="col">Blood Type</th>
                              <th scope="col">Donation Date</th>
                              <th scope="col">Quantity</th>
                            </tr>
                          </thead>
                          <tbody id="donorTableBody">
                            <tr>
                              <th scope="row">1</th>
                              <td>A+</td>
                              <td>01/02/2024</td>
                              <td>2bags</td>
                            </tr>
                           
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>