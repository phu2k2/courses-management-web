function handleCheckboxClick() {
    var headerCheckbox = document.querySelector('.form-check-input.header-checkbox');
    var checkboxes = document.querySelectorAll('.form-check-input.flexCheckDefault');

    checkboxes.forEach(function (checkbox) {
        checkbox.checked = headerCheckbox.checked;
    });

    calculateTotal();
}

function calculateTotal() {
    var total = 0;
    var checkboxes = document.querySelectorAll('.form-check-input.flexCheckDefault:checked');

    checkboxes.forEach(function (checkbox) {
        var price = parseFloat(checkbox.getAttribute('data-price'));
        total += price;
    });

    var totalElement = document.querySelector('.order-total td strong span');
    if (totalElement) {
        totalElement.textContent = '$' + total.toFixed(2);
    }
}
function handleDeleteButtonClick() {
    var modalBody = document.querySelector('.modal-body.delete_item');
    modalBody.innerHTML = '';
    var checkboxes = document.querySelectorAll('.form-check-input.flexCheckDefault:checked');
    var selectedIds = [];
    checkboxes.forEach(function (checkbox) {
        selectedIds.push(checkbox.getAttribute('data-id'));
    });
    var idsString = selectedIds.join(', ');
    selectedIds.forEach(function (id) {
        modalBody.innerHTML += '<ul><li><strong>' + id + '</strong></li><ul>';
    });
    document.getElementById('selectedItemsInput').value = idsString;
}





