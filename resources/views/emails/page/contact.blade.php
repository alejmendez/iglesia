@component('mail::message')
# Contacto

Nombre: {{ $data['name'] }}
Correo: {{ $data['email'] }}
Mensaje: {{ $data['message'] }}

@component('mail::button')
boton
@endcomponent

@endcomponent