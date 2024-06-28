<?php 
    $page_title = 'Blood Request History';
    include_once('includes/header.php');
?>

<body>
    <!--table-->
    <div class="container">
        <div class="row mb-3">
            <div class="col mt-3">
                <h1 class="tabletitle">Blood Request History</h1>
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
                              <th scope="col">Request ID</th>
                              <th scope="col">Request Date</th>
                              <th scope="col">Blood Type</th>
                              <th scope="col">Quantity</th>
                              <th scope="col">Urgency Level</th>
                              <th scope="col">Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody id="donorTableBody">
                            <tr>
                              <th scope="row">1</th>
                              <td>1</td>
                              <td>20/07/2024</td>
                              <td>A+</td>
                              <td>2 Bags</td>
                              <td>Very Urgent</td>
                              <td>Approved</td>
                              
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
                    <h5 class="modal-title" id="addModalLabel">Add Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addForm">
                        <div class="mb-3">
                            <label for="addRequestID" class="form-label">Request ID</label>
                            <input type="text" class="form-control" id="addRequestID">
                        </div>
                        <div class="mb-3">
                            <label for="addRequestDate" class="form-label">Request Date</label>
                            <input type="date" class="form-control" id="addRequestDate">
                        </div>
                        <div class="mb-3">
                            <label for="addBloodType" class="form-label">Blood Type</label>
                            <input type="Date" class="form-control" id="addBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="addQuantity" class="form-label">Quantity</label>
                            <input type="text" class="form-control" id="addQuantity">
                        </div>
                        <div class="mb-3">
                            <label for="addUrgencyLevel" class="form-label">Urgency Level</label>
                            <input type="address" class="form-control" id="addAddress">
                        </div>
                        <div class="mb-3">
                            <label for="addstatus" class="form-label">Status</label>
                            <select id="addstatus" class="form-select">
                            <option selected>Approved</option>
                            <option>Pending</option>
                            <option>Rejected</option>
                        </select>
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
                    <h5 class="modal-title" id="editModalLabel">Edit Request</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <div class="mb-3">
                            <label for="editRequestID" class="form-label">Request ID</label>
                            <input type="text" class="form-control" id="editRequestID">
                        </div>
                        <div class="mb-3">
                            <label for="editRequestDate" class="form-label">Request Date</label>
                            <input type="date" class="form-control" id="editRequestDate">
                        </div>
                        <div class="mb-3">
                            <label for="editBloodType" class="form-label">Blood Type</label>
                            <input type="text" class="form-control" id="editBloodType">
                        </div>
                        <div class="mb-3">
                            <label for="editQuantity" class="form-label">Quantity</label>
                            <input type="date" class="form-control" id="editQuantity">
                        </div>
                        <div class="mb-3">
                            <label for="editUrgencyLevel" class="form-label">Urgency Level</label>
                            <input type="text" class="form-control" id="editUrgencyLevel">
                        </div>
                        <div class="mb-3">
                            <label for="editstatus" class="form-label">Status</label>
                            <select id="editstatus" class="form-select">
                                <option selected>Approved</option>
                                <option>Pending</option>
                                <option>Rejected</option>
                            </select>
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
        
        document.getElementById('editRequestID').value = cells[0].innerText;
        document.getElementById('editRequestDate').value = cells[1].innerText;
        document.getElementById('editBloodType').value = cells[2].innerText;
        document.getElementById('editQuantity').value = cells[3].innerText;
        document.getElementById('editUrgencyLevel').value = cells[4].innerText;
        document.getElementById('editstatus').value = cells[5].innerText;

        const editModal = new bootstrap.Modal(document.getElementById('editModal'));
        editModal.show();
}

        function saveChanges() {
        const cells = currentEditRow.getElementsByTagName('td');
        
        cells[0].innerText = document.getElementById('editRequestID').value;
        cells[1].innerText = document.getElementById('editRequestDate').value;
        cells[2].innerText = document.getElementById('editBloodType').value;
        cells[3].innerText = document.getElementById('editQuantity').value;
        cells[4].innerText = document.getElementById('editUrgencyLevel').value;
        cells[5].innerText = document.getElementById('editstatus').value;

    const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    editModal.hide();
}

    </script>
    
    <!--boostrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   
</body>
</html>