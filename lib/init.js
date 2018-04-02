$(function($) {

    $(".btn_collection_by_gender").on("click", function(){
        redirectPost('collection.php', { category: $(this).attr("data-id"), subcategory: 0 });
    });

    $(document).on('mouseenter','.genders',function () {
        $(this).find(".item-gender").fadeIn(300);
    });
    $(document).on('mouseleave','.genders',function () {
        $(this).find(".item-gender").fadeOut(500);
    });

    $(document).on('click','.btn_user',function () {
        $('#modal-user').modal('show');
    });

    $(document).on('click','.btn_login',function () {
        if($("#frm_login").valid()){
          console.log('validado');
        } else {
            console.log('No validado')
        }

    });

    $('#frm_login').validate({
        rules: {
            email: {
                required: true
            },
            contraseña: {
                required: true
            }
        },
        messages: {
            email: {
                required: "Campo obligatorio"
            },
            contraseña: {
                required: "Campo obligatorio"
            }
        },
        highlight: function (element) {

            $(element).closest('div').addClass('has-error');
        },
        unhighlight: function (element) {
            if($(element).parent("div.number-validate-color").length == 0){
                $(element).closest('div').removeClass('has-error');
            }
        },
        errorPlacement: function (error, element) {
            if (element.parent('.input-group').length) {
                if (element.parent('div').children('.error').length <= 0) {
                    error.insertAfter(element.parent());
                }
            } else {
                if (element.parent('div').children('.error').length <= 0) {
                    error.appendTo(element.parent());
                }
            }
        }
    });
    function redirectPost(url, data) {
        var form = document.createElement('form');
        document.body.appendChild(form);
        form.method = 'post';
        form.action = url;
        for (var name in data) {
            var input = document.createElement('input');
            input.type = 'hidden';
            input.name = name;
            input.value = data[name];
            form.appendChild(input);
        }
        form.submit();
    }
});
