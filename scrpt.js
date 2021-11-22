$(function () {

    $('#sum').on('click', function (e) {
        e.preventDefault();

        $.ajax({
            url: "ajax.php",
            method: 'get',
            dataType: 'json',
            success: function (suc) {
                $('#count').html("Общая сумма: " + suc.sum);
            }
        })
    })
});