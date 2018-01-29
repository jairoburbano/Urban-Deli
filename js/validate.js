(function ($) {
    $.validator.addMethod("customemail", 
                          function(value, element) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(value);
    }, 
                          "Tu correo no es válido"
                         );
    function validateContacto() {
        $('<div class="message"></div>').hide().appendTo('.contact-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--contacto').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    name: "required",
                    country: {
                        valueNotEquals: "default"
                    },
                    mail: {
                        required: true,
                        email: true
                    },
                    message: {
                        required:true,
                        minlength:8
                    },
                },
                messages: {
                    name: {
                        required: "Usa solo letras"
                    },
                    country: {
                        valueNotEquals: "Debes elegir una"
                    },
                    mail: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    message: {
                        required: "Ingresar un mensaje/consulta",
                        minlength: "Ingresa al menos 8 caracteres."
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.contact-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario--contacto').attr('action'), $('.formulario--contacto').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.contact-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.contact-form .message').html('<p>Tu Mensaje ha sido enviado con éxito</p>').fadeIn().delay('3000').fadeOut();
                            $('.formulario--contacto').find('.form__valid').removeClass('form__valid');
                            $('.formulario--contacto')[0].reset();
                        } else {
                            $('.contact-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateIngreso() {
        $('<div class="message"></div>').hide().appendTo('.ingreso-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--ingreso').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    username: "required",
                    password: "required",
                },
                messages: {
                    username: {
                        required: "Usa solo letras"
                    },
                    password: {
                        required: "Ingresa tu contraseña"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.ingreso-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario--ingreso').attr('action'), $('.formulario--ingreso').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.ingreso-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.ingreso-form .message').html('<p>Tu Mensaje ha sido enviado con éxito</p>').fadeIn().delay('3000').fadeOut();
                            $('.formulario--ingreso').find('.form__valid').removeClass('form__valid');
                            $('.formulario--ingreso')[0].reset();
                        } else {
                            $('.ingreso-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateCrear() {
        $('<div class="message"></div>').hide().prependTo('.crear-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--crear').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    nickname: "required",
                    direccion: "required",
                    street: "required",
                    streetphone: "required",
                    phone: "required",
                    lastname: "required",
                    sex: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                    mail: {
                        required: true,
                        email: true
                    },
                    rut: "required",
                    phone: "required",
                    day: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                    mont: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                    year: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                    newpass: "required",
                    newpass_again: {
                        equalTo: "#newpass"
                    },
                    terminos: "required"
                },
                messages: {
                    direccion: {
                        required: "Usa solo letras"
                    },
                    streetphone: {
                        required: "Ingresa un numero de telefono"
                    },
                    street: {
                        required: "Ingresa en nombre del lugar"
                    },
                    phone: {
                        required: "Ingresa un numero de telefono"
                    },
                    nickname: {
                        required: "Usa solo letras"
                    },
                    lastname: {
                        required: "Usa solo letras"
                    },
                    sex: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    },
                    mail: {
                        required: "Ingresa un Email válido",
                        email: "Ingresa un Email válido"
                    },
                    rut: {
                        required: "Ingresa tu RUT"
                    },
                    phone: {
                        required: "Ingresa tu numero de telefono"
                    },
                    day: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    },
                    month: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    },
                    year: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    },
                    newpass: {
                        required: "Ingresa tu contraseña"
                    },
                    newpass_again: {
                        equalTo: "Tu contraseña no coincide"
                    },
                    terminos: {
                        required: "Debes aceptar los terminos"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.crear-form .loader').css('display', 'flex');
                    $('.formulario--crear').submit();

                    var formData = new FormData($('.formulario--crear')[0]);
                    formData.append("action", "registro");

                    $.ajax({
                        url: ajax_registro.ajaxurl,
                        type: "POST",
                        data: formData,
                        processData: false,  // tell jQuery not to process the data
                        contentType: false,   // tell jQuery not to set contentType
                        success: function ( data ) {
                            var obj = data;
                            $('.crear-form .loading').fadeOut();
                            var obj = $.parseJSON(data);
                            $('.crear-form .loading').fadeOut();
                            if (obj.exito === 'exito') {
                                $('body').animate({ scrollTop: 0 }, 800, function() {
                                    $('.crear-form .message').html('<p>Tu cuenta ha sido creada con éxito</p>').slideDown().delay('3000').slideUp();
                                    $('.crear-form .loader').css('display', 'none');
                                });
                                $('.formulario--crear').find('.form__valid').removeClass('form__valid');
                                $('.formulario--crear')[0].reset();
                                top.location.href = obj.url;
                            } else {
                                $('.crear-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                            }
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateNewsletter() {
        $('<div class="message"></div>').hide().appendTo('.form-newsletter');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.newslettter-form').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    news: {
                        required: {
                            depends: function(){
                                $(this).val($.trim($(this).val()));
                                return true;
                            } 
                        },
                        customemail: true
                    },
                },
                messages: {
                    news: {
                        required: "Ingresa tu correo",
                        customemail: "Tu correo es inválido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.form-newsletter .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.newslettter-form').attr('action'), $('.newslettter-form').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.form-newsletter .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.form-newsletter .message').html('<p>Gracias por suscribirte</p>').fadeIn().delay('3000').fadeOut();
                            $('.newslettter-form').find('.form__valid').removeClass('form__valid');
                            $('.newslettter-form')[0].reset();
                        } else {
                            $('.form-newsletter .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateDatos() {
        $('<div class="message"></div>').hide().appendTo('.cuenta-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--cuenta').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    nickname: "required",
                    lastname: "required",
                    sex: {
                        required: "true",
                        valueNotEquals: "default"
                    },
                    mail: {
                        required: {
                            depends: function(){
                                $(this).val($.trim($(this).val()));
                                return true;
                            } 
                        },
                        customemail: true
                    },
                    rut: "required",
                    phone: "required",
                    day: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                    mont: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                    year: {
                        required: true, 
                        valueNotEquals: "default" 
                    },
                },
                messages: {
                    nickname: {
                        required: "Usa solo letras"
                    },
                    lastname: {
                        required: "Usa solo letras"
                    },
                    sex: {
                        required: "Selecciona una",
                        valueNotEquals: "Selecciona una"
                    },
                    mail: {
                        required: "Ingresa tu correo",
                        customemail: "Tu correo es inválido"
                    },
                    rut: {
                        required: "Usa solo letras"
                    },
                    phone: {
                        required: "Usa solo letras"
                    },
                    day: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    },
                    month: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    },
                    year: {
                        required: "Debes elegir una",
                        valueNotEquals: "Debes elegir una"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.cuenta-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario--cuenta').attr('action'), $('.formulario--cuenta').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.cuenta-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.cuenta-form .message').html('<p>Gracias por suscribirte</p>').fadeIn().delay('3000').fadeOut();
                            $('.formulario--cuenta').find('.form__valid').removeClass('form__valid');
                            $('.formulario--cuenta')[0].reset();
                        } else {
                            $('.cuenta-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validatePass() {
        $('<div class="message"></div>').hide().appendTo('.cambiar-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--cambiar').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    pass: "required",
                    pass_new: "required",
                    pass_again: {
                        equalTo: "#pass_new"
                    },
                    terminos: "required",
                },
                messages: {
                    pass: {
                        required: "ingresa tu contraseña"
                    },
                    pass_new: {
                        required: "Ingresa tu contraseña"
                    },
                    pass_again: {
                        equalTo: "Tu contraseña no coincide"
                    },
                    terminos: {
                        required: "Requerido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.cambiar-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario--cambiar').attr('action'), $('.formulario--cambiar').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.cambiar-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.cambiar-form .message').html('<p>Gracias por suscribirte</p>').fadeIn().delay('3000').fadeOut();
                            $('.formulario--cambiar').find('.form__valid').removeClass('form__valid');
                            $('.formulario--cambiar')[0].reset();
                        } else {
                            $('.cambiar-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateDireccion() {
        $('<div class="message"></div>').hide().appendTo('.direccion-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--direccion').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    name: "required",
                    phone: "required",
                    direccion: "required",
                },
                messages: {
                    name: {
                        required: "ingresa tu contraseña"
                    },
                    phone: {
                        required: "Ingresa tu contraseña"
                    },
                    direccion: {
                        required: "Requerido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.direccion-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario--direccion').attr('action'), $('.formulario--direccion').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.direccion-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.direccion-form .message').html('<p>Gracias por suscribirte</p>').fadeIn().delay('3000').fadeOut();
                            $('.formulario--direccion').find('.form__valid').removeClass('form__valid');
                            $('.formulario--direccion')[0].reset();
                        } else {
                            $('.direccion-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateDireccionCambio() {
        $('<div class="message"></div>').hide().appendTo('.direccion-cambio-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--direccion-cambio').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    name: "required",
                    phone: "required",
                    direccion: "required",
                },
                messages: {
                    name: {
                        required: "ingresa tu contraseña"
                    },
                    phone: {
                        required: "Ingresa tu contraseña"
                    },
                    direccion: {
                        required: "Requerido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.direccion-cambio-form .loading').css({opacity: 0}).animate({opacity: 1});
                    $.post($('.formulario--direccion-cambio').attr('action'), $('.formulario--direccion-cambio').serialize(), function (data) {
                        var obj = $.parseJSON(data);
                        $('.direccion-cambio-form .loading').fadeOut();
                        if (obj.exito === 'exito') {
                            $('.direccion-cambio-form .message').html('<p>Gracias por suscribirte</p>').fadeIn().delay('3000').fadeOut();
                            $('.formulario--direccion-cambio').find('.form__valid').removeClass('form__valid');
                            $('.formulario--direccion-cambio')[0].reset();
                        } else {
                            $('.direccion-cambio-form .message').html('<p class="warning-msg">' + obj.mensaje + '</p>').removeClass('hidden');
                        }
                    });
                    return false;
                }
            });
        });
    }
    function validateRestart() {
        $('<div class="message"></div>').hide().appendTo('.restart-form');
        $.validator.addMethod("valueNotEquals", function(value, element, arg){
            return arg != value;
        }, "Value must not equal arg.");
        $('.formulario--restart').each(function() {
            $(this).validate({
                onkeyup: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                onfocusin: function (element, event) {
                    if (event.which === 9 && this.elementValue(element) === "") {
                        return;
                    } else {
                        this.element(element);
                    }
                },
                rules: {
                    restart: {
                        required: {
                            depends: function(){
                                $(this).val($.trim($(this).val()));
                                return true;
                            } 
                        },
                        customemail: true
                    },
                },
                messages: {
                    restart: {
                        required: "Ingresa tu correo",
                        customemail: "Tu correo es inválido"
                    }
                },
                errorElement: 'p',
                errorClass: 'error',
                validClass: 'form-valid',
                highlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').addClass(errorClass).removeClass(validClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).parents('.group').removeClass(errorClass).addClass(validClass);
                },
                submitHandler: function (form) {
                    $('.formulario--restart').submit();
                }
            });
        });
    }
    validateContacto();
    validateIngreso();
    validateCrear();
    validateNewsletter();
    validateDatos();
    validatePass();
    validateDireccion();
    validateDireccionCambio();
    validateRestart();
})(jQuery);