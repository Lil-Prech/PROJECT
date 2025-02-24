<?php 
    $page_title = 'Blood Request';
    include_once('includes/header.php');
?>

<body>
    <!--table-->
    <div class="container">
        <div class="row mb-3">
            <div class="col mt-3">
                <h1 class="tabletitle">Blood Request</h1>
            </div>
            <div class="col text-end mt-3">
                <button class="btn me-2 " id="btnAddDonor" data-bs-toggle="modal" data-bs-target="#addModal"><i class="ri-add-line me-1"></i>Add Request</button>
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
                              <th scope="col">Recipient's Name</th>
                              <th scope="col">Blood Type</th>
                              <th scope="col">Gender</th>
                              <th scope="col">Date Of Birth</th>
                              <th scope="col">Contact Info</th>
                              <th scope="col">Address</th>
                              <th scope="col">Medical Condition</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="donorTableBody">
                            <tr>
                              <th scope="row">1</th>
                              <td>Therasa</td>
                              <td>AB+</td>
                              <td>Female</td>
                              <td>03/11/2000</td>
                              <td>23456789</td>
                              <td>Santa</td>
                              <td>fcsvdghbjknlc</td>
                              <td><i class="ri-edit-line" onclick="openEditModal(this)"></i> <i class="ri-delete-bin-6-line"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>O-</td>
                              <td>05/03/2024</td>
                              <td>17/03/2025</td>
                              <td>1</td>
                               <td>Reserved</td> 
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
                    <h5 class="modal-title" id="addModalLabel">Add Blood Request</h5>
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
                            <input type="Date" class="form-control" id="addGender">
                        </div>
                        <div class="mb-3">
                            <label for="addContactInfo" class="form-label">Contact information</label>
                            <input type="Date" class="form-control" id="addContactInfo">
                        </div>
                        <div class="mb-3">
                            <label for="addAddress" class="form-label">Address</label>
                            <input type="address" class="form-control" id="addAddress">
                        </div>
                        <div class="mb-3">
                            <label for="addMedicalCondition" class="form-label">Medical Condition</label>
                            <input type="text" class="form-control" id="addMedicalCondition">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn me-2 " id="btnrqst" onclick="addDonor()">Add Request</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Dononation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="editName">
                        </div>
                        <div class="mb-3">
                            <label for="editName" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="editBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="editGender" class="form-label">Gender</label>
                            <input type="date" class="form-control" id="editGender">
                        </div>
                        <div class="mb-3">
                            <label for="editContactInfo" class="form-label">Contact Info</label>
                            <input type="date" class="form-control" id="editContactInfo">
                        </div>
                        <div class="mb-3">
                            <label for="editDonorId" class="form-label">Address</label>
                            <input type="address" class="form-control" id="editAddress">
                        </div>
                        <div class="mb-3">
                            <label for="editMedicalCondition" class="form-label">Medical Codition</label>
                            <input type="textarea" class="form-control" id="editMedicalCondition">
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
    <!--SCRIPTS-->
    <script>
        let currentEditRow;

        function openEditModal(element) {
        currentEditRow = element.parentElement.parentElement;
        const cells = currentEditRow.getElementsByTagName('td');
        
        document.getElementById('editName').value = cells[0].innerText;
        document.getElementById('editBloodType').value = cells[1].innerText;
        document.getElementById('editGender').value = cells[2].innerText;
        document.getElementById('editContactInfo').value = cells[3].innerText;
        document.getElementById('editAddress').value = cells[4].innerText;
        document.getElementById('editMedicalCondition').value = cells[5].innerText;

        const editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal.show();
}

        function saveChanges() {
        const cells = currentEditRow.getElementsByTagName('td');
        
        cells[0].innerText = document.getElementById('editName').value;
        cells[1].innerText = document.getElementById('editBloodType').value;
        cells[2].innerText = document.getElementById('editGender').value;
        cells[3].innerText = document.getElementById('editContactInfo').value;
        cells[4].innerText = document.getElementById('editAddress').value;
        cells[5].innerText = document.getElementById('editMedicalCondition').value;

    const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    editModal.hide();
}

    </script>
    
    <!--boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>