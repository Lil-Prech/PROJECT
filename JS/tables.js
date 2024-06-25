
let currentEditRow;

function openEditModal(element) {
    currentEditRow = element.parentElement.parentElement;
    const cells = currentEditRow.getElementsByTagName('td');
    
    document.getElementById('editName').value = cells[0].innerText;
    document.getElementById('editBloodType').value = cells[1].innerText;
    document.getElementById('editGender').value = cells[2].innerText;
    document.getElementById('editDob').value = cells[3].innerText;
    document.getElementById('editContactInfo').value = cells[4].innerText;
    document.getElementById('editLastDonationDate').value = cells[5].innerText;

    const editModal = new bootstrap.Modal(document.getElementById('editModal'));
    editModal.show();
}

function saveChanges() {
    const cells = currentEditRow.getElementsByTagName('td');
    
    cells[0].innerText = document.getElementById('editName').value;
    cells[1].innerText = document.getElementById('editBloodType').value;
    cells[2].innerText = document.getElementById('editGender').value;
    cells[3].innerText = document.getElementById('editDob').value;
    cells[4].innerText = document.getElementById('editContactInfo').value;
    cells[5].innerText = document.getElementById('editLastDonationDate').value;

    const editModal = bootstrap.Modal.getInstance(document.getElementById('editModal'));
    editModal.hide();
}
