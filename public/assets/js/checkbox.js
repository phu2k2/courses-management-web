function calculateTotal() {
    var total = 0;
    var checkboxes = document.querySelectorAll('.form-check-input:checked');

    checkboxes.forEach(function (checkbox) {
        var price = parseFloat(checkbox.getAttribute('data-price'));
        total += price;
    });
    var totalElement = document.querySelector('.order-total td strong span');
    if (totalElement) {
        totalElement.textContent = '$' + total.toFixed(2);
    }
}
