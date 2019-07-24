$(function () {
    $("form[name='forma1'] > input:checkbox").eq(1).prop('checked', true);

    $("form[name='forma1']").submit(
        function(e) {
            //отмена действия по умолчанию для кнопки submit
            e.preventDefault();

            let form = $(this);
            let method = form.attr('method');
            let url = "forma1.php";
            let data = form.serialize();

            $.ajax({
                type: method,
                url: url,
                data: data,
                success: function(response) {
                    console.log(response);
                    let result = $.parseJSON(response);

                    $("#data").html('fio: '+result.fio+'<br>city: '+result.city);
                },
                error: function(response) { // Данные не отправлены
                    alert('Ошибка. Данные не отправлены.');
                }
            });

        });
});