<div>
    <h1><strong> Iván, alguién quiere ponerse en contacto contigo </strong> </h1>
    <p>{{ $data_mail['name'] }} {{ $data_mail['lastName'] }}te ha envíado el siguiente mensaje:</p>
    <p>correo: {{ $data_mail['email'] }}</p>
    <h5>Asunto: <span> {{ $data_mail['subject'] }}</span></h5>
    <h5>Mensaje:</h5>
    <p>
        {{ $data_mail['body'] }}
    </p>
</div>
