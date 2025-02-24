<?php 
    $page_title = 'Donors';
    include_once('includes/header.php');
?>

<body>
    <!--table-->
    <div class="container">
        <div class="row mb-3">
            <div class="col mt-3">
                <h1 class="tabletitle">Donor List</h1>
            </div>
            <div class="col text-end mt-3">
                <button class="btn me-2 " id="btnAddDonor" data-bs-toggle="modal" data-bs-target="#addModal"><i class="ri-add-line me-1"></i>Add Donor</button>
                <a href="home.php">
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
                              <th scope="col">Name</th>
                              <th scope="col">Blood Type</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Date Of Birth</th>
                              <th scope="col">Contact Info</th>
                              <th scope="col">Last Donation Date</th>
                              <th scope="col">Action</th>
                            </tr>
                          </thead>
                          <tbody id="donorTableBody">
                            <tr>
                              <th scope="row">1</th>
                              <td>Wultoff Germaine</td>
                              <td>O-</td>
                              <td>Female</td>
                              <td>16/08/2005</td>
                              <td>680553746</td>
                              <td>New Donor</td>
                              <td><i class="ri-edit-line" onclick="openEditModal(this)"></i> <i class="ri-delete-bin-6-line"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>Wultoff Germain</td>
                              <td>O-</td>
                              <td>Female</td>
                              <td>16/08/2005</td>
                              <td>680553746</td>
                              <td>New Donor</td>
                              <td><i class="ri-edit-line" onclick="openEditModal(this)"></i> <i class="ri-delete-bin-6-line"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">3</th>
                              <td>Wultoff Germain</td>
                              <td>O-</td>
                              <td>Female</td>
                              <td>16/08/2005</td>
                              <td>680553746</td>
                              <td>New Donor</td>
                              <td><i class="ri-edit-line" onclick="openEditModal(this)"></i> <i class="ri-delete-bin-6-line"></i></td>
                            </tr>
                          </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!--Add modal-->
    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addModalLabel">Add Donor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <div class="mb-3">
                            <label for="addName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="addName">
                        </div>
                        <div class="mb-3">
                            <label for="addBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="addBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="addGender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="addGender">
                        </div>
                        <div class="mb-3">
                            <label for="addDob" class="form-label">Date Of Birth</label>
                            <input type="text" class="form-control" id="addDob">
                        </div>
                        <div class="mb-3">
                            <label for="addContactInfo" class="form-label">Contact Info</label>
                            <input type="text" class="form-control" id="addContactInfo">
                        </div>
                        <div class="mb-3">
                            <label for="addLastDonationDate" class="form-label">Last Donation Date</label>
                            <input type="text" class="form-control" id="addLastDonationDate">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn me-2 " id="btnrqst" onclick="addDonor()">Add Donor</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Donor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editName">
                        </div>
                        <div class="mb-3">
                            <label for="editBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="editBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="editGender" class="form-label">Gender</label>
                            <input type="text" class="form-control" id="editGender">
                        </div>
                        <div class="mb-3">
                            <label for="editDob" class="form-label">Date Of Birth</label>
                            <input type="date" class="form-control" id="editDob">
                        </div>
                        <div class="mb-3">
                            <label for="editContactInfo" class="form-label">Contact Info</label>
                            <input type="text" class="form-control" id="editContactInfo">
                        </div>
                        <div class="mb-3">
                            <label for="editLastDonationDate" class="form-label">Last Donation Date</label>
                            <input type="date" class="form-control" id="editLastDonationDate">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnrqst" onclick="saveChanges()">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!--JS FILE-->
    <script src="../JS/tables.js"></script>
    <!--boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>