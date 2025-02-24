<?php 
    $page_title = 'Donations';
    include_once('includes/header.php');
?>

<body>
    <!--table-->
    <div class="container">
        <div class="row mb-3">
            <div class="col mt-3">
                <h1 class="tabletitle">Blood Donations</h1>
            </div>
            <div class="col text-end mt-3">
                <button class="btn me-2 " id="btnAddDonor" data-bs-toggle="modal" data-bs-target="#addModal"><i class="ri-add-line me-1"></i>Add Blood</button>
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
                              <th scope="col">Blood Type</th>
                              <th scope="col">Donation Date</th>
                              <th scope="col">Donor ID</th>
                              <th scope="col">Quantity</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="donorTableBody">
                            <tr>
                              <th scope="row">1</th>
                              <td>A+</td>
                              <td>01/02/2024</td>
                              <td>2</td>
                              <td>2bags</td>
                              <td><i class="ri-edit-line" onclick="openEditModal(this)"></i> <i class="ri-delete-bin-6-line"></i></td>
                            </tr>
                            <tr>
                              <th scope="row">2</th>
                              <td>O-</td>
                              <td>05/03/2024</td>
                              <td>1</td>
                               <td>2bags</td> 
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
                    <h5 class="modal-title" id="addModalLabel">Add Blood</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <div class="mb-3">
                            <label for="addBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="addBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="addDonationDate" class="form-label">Donation Date</label>
                            <input type="Date" class="form-control" id="addDonationDate">
                        </div>
                        <div class="mb-3">
                            <label for="addDonorId" class="form-label">Donor ID</label>
                            <input type="number" class="form-control" id="addDonorId">
                        </div>
                        <div class="mb-3">
                            <label for="addQuantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="addQuantity">
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
                    <h5 class="modal-title" id="editModalLabel">Dononation</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="editBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="editDonationDate" class="form-label">Donation Date</label>
                            <input type="date" class="form-control" id="editDonationDate">
                        </div>
                        <div class="mb-3">
                            <label for="editDonorId" class="form-label">Donor Id</label>
                            <input type="number" class="form-control" id="editDonorId">
                        </div>
                        <div class="mb-3">
                            <label for="editQuantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="editQuantity">
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
    

    document.getElementById('editBloodType').value = cells[0].innerText;
    document.getElementById('editDonationDate').value = cells[1].innerText;
    document.getElementById('editDonorId').value = cells[2].innerText;
    document.getElementById('editQuantity').value = cells[3].innerText;

    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.show();
}

function saveChanges() {
    const cells = currentEditRow.getElementsByTagName('td');
    
   
    cells[0].innerText = document.getElementById('editBloodType').value;
    cells[1].innerText = document.getElementById('editDonationDate').value;
    cells[2].innerText = document.getElementById('editDonorId').value;
    cells[3].innerText = document.getElementById('editQuantity').value;

    const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    editModal.hide();
}

    </script>
    
    <!--boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>