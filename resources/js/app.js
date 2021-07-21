import 'bootstrap';


$(function () {
    $(".quantity").on('input', function () {
        let q = $(this);
        $.getJSON('/basket/change_quantity', {
            id: q.attr("data-id"),
            quantity: q.val()
        }, function (data) {
            if (data.success) {
                q.closest("tr").find(".quantity-error").text("");
                return;
            }

            q.closest("tr").find(".quantity-error").html(data.message);
        });
    });
});
