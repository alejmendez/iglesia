@extends('layouts.default')

@section('subheader')
Contacto
@endsection

@section('precontent')
<div style="width: 100%; height: 320px;">
    <iframe width="100%" height="320" src="https://maps.google.com/maps?width=100%&amp;height=320&amp;hl=en&amp;coord=-29.97579723976544,-71.2590890756714&amp;q=Ren%C3%A9%20Schneider%201867-1881%2C%20Coquimbo+(iglesia)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
</div>
@endsection

@section('content')
<div class="row">
    <div class="col-md-6">
        <div id="contact-form-wrapper">
            <div class="contact_form_holder">
                <form id="contact" class="row" name="form1" method="post" action="#">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Tu Nombre" />
                    <div id="error_name" class="error">Por favor revise su nombre</div>

                    <input type="text" class="form-control" name="email" id="email" placeholder="Tu Correo Electrónico" />
                    <div id="error_email" class="error">Por favor revise su correo electrónico</div>

                    <textarea cols="10" rows="10" name="message" id="message" class="form-control" placeholder="Tu Mensaje"></textarea>
                    <div id="error_message" class="error">Por favor revisa tu mensaje</div>
                    <div id="mail_success" class="success"></div>
                    <div id="mail_failed" class="error"></div>

                    <p id="btnsubmit">
                        <input type="submit" id="send" value="Enviar" class="btn btn-custom" />
                    </p>
                </form>
            </div>
        </div>
    </div>

    <div class="col-md-6 text-center">
        <div class="contact-info">
            <div class="social-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-rss"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-envelope-o"></i></a>
            </div>

            <div class="divider-line"></div>

            <span class="title">Telefono:</span>
            (+56) 9 123 1234

            <div class="divider-line"></div>
            <span class="title">Horario de congregación:</span>
            Domingo 06:00 and 09:00<br>
            Sabados 08:00<br>

            <div class="divider-line"></div>

            <span class="title">Direccion:</span>
            René Schneider 1867-1881, Coquimbo
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
$(function(){
    $("#send").click(function(){
        var name    = $("#name").val(),
            email   = $("#email").val(),
            message = $("#message").val(),
            error   = false;

        if (!   validateEmail(email)) {
            var error = true;
            $("#error_email").fadeIn(500);
        } else {
            $("#error_email").fadeOut(500);
        }

        if (name.length == 0) {
            var error = true;
            $("#error_name").fadeIn(500);
        } else {
            $("#error_name").fadeOut(500);
        }

        if (message.length == 0) {
            var error = true;
            $("#error_message").fadeIn(500);
        } else {
            $("#error_message").fadeOut(500);
        }

        if(error == false){
            $("#send").attr({"disabled" : "true", "value" : "Enviando..." });

            $.post('{{ route("contact") }}', {
                name : name,
                email : email,
                subject : 'Tienes correo electronico',
                message : message
            }, function(data) {
                if (data.success) {
                    $("#send").remove();
                    $("#mail_success").text(data.message).fadeIn(500);
                } else {
                    $("#mail_failed").text(data.message).fadeIn(500);
                    $("#send").removeAttr("disabled").attr("value", "Enviar");
                }
            });
        }

        return false;
    });
});

function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
</script>
@endpush