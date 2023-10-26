function deleteItem(itemId, token) {
    $.ajax({
        type: 'POST',
        url: `carts/${itemId}`,
        data: {
            'id': itemId,
            '_method': 'DELETE',
            '_token': token
        },
        success: function () {
            location.reload(true);
        }
    });
}
