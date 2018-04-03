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

    //BOTON PARA REGISTRARSE    
    $(document).on('click','.btn_registration',function () {
        if($("#frm_registration").valid()){
          alert("prueba");
            console.log('validado');
        } else {
            alert("prueba no paso");
            console.log('No validado')
        }

    });

    //BOTON PARA REGISTRARSE    
    $(document).on('click','.btn_go_registration',function () {
        location.href="/registration.php"

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
    
    //FORM REGISSTRATION
    $('#frm_registration').validate({
        rules: {
            name: {
                required: true,
                minlength: 2
            },
            lastname: {
                required: true,
                minlength: 2
            },
            email_r: {
                required: true,
                email: true
            },
            email2_r: {
                required: true,
                equalTo: "#email_r"
            },
            pwd: {
                required: true,
                minlength: 6
            },
            pwd2: {
                required: true,
                equalTo: "#pwd"
            }
        },
        messages: {
            name: {
                required: "Campo obligatorio",
                minlength: "Tú nombre debe de tener al menos 2 caracteres"
            },
            lastname: {
                required: "Campo obligatorio",
                minlength: "Tú nombre debe de tener al menos 2 caracteres"
            },
            email_r: {
                required: "Campo obligatorio"
            },
            email2_r: {
                required: "Campo obligatorio",
                equalTo: "El correo debe ser igual que el de arriba"
            },
            pwd: {
                required: "Campo obligatorio"
            },
            pwd2: {
                required: "Campo obligatorio",
                equalTo: "La contraseña debe de ser la misma"
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

    /////////////////////////////

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
