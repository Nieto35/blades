<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vistas</title> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: "Poppins", sans-serif;
        }

        .d-vistas-general {
            margin: 0 auto;
            text-align: center;
        }

        .d-titulo-vistas h1 {
            margin: 20px;
            color: #002e6d;
            font-weight: 900;
            font-size: 60px;
        }

        .d-contenedor-vistas {
            margin: 0 auto;
            width: 90%;
            display: flex;
            justify-content: center;
            align-self: center;
            flex-wrap: wrap;
        }

        .d-vistas {
            width: 20%;
            border: 2px solid #002e6d;
            border-radius: 30px;
            margin: 30px;
            text-decoration: none;
            padding: 20px;
            font-weight: 700;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            transition: 0.5s;
        }

        .d-vistas:hover {
            text-decoration: underline;
            color: #ff595a;
            box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
            transform: scale(1.05);
        }

        .d-p-vistas {
            color: #ff595a;
            font-size: 10px;
            margin-bottom: 15px;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: normal;
        }

        .d-imagen-vistas {
            width: 100%;
            height: 200px;
            object-fit: contain;
        }

    </style>
</head>
<body>
    <div class="d-vistas-general">
        <div class="d-titulo-vistas">
            <h1>Selecciona una vista</h1>
        </div>
        <div class="d-contenedor-vistas">
                <x-vista-signature/>
                <x-vista-invoice/>
                <x-vista-needs_assessment/>
                <x-vista-payroll/>
                <x-vista-registration/>
                <x-vista-welcome/>
                <x-vista-carer_available_update_plain/>
                <x-vista-carer_available_update/>
                <x-vista-recruiter-profile-mail/>
                <x-vista-issued_invoice/>
                <x-vista-accept/>
                <x-vista-reject/>
                <x-vista-reminder/>
                <x-vista-resend/>
                <x-vista-draft-created-employers-bihar/>
                <x-vista-draft-created-employers/>
                <x-vista-draft-created/>
                <x-vista-draft-updated/>
                <x-vista-employer-registration-gathering-bihar/>
                <x-vista-employer-registration-gathering/>
                <x-vista-employer-registration-signature-bihar/>
                <x-vista-employer-registration-signature/>
                <x-vista-employer-registration-success-bihar/>
                <x-vista-employer-registration-success/>
                <x-vista-employment-registration-gathering-bihar/>
                <x-vista-employment-registration-gathering/>
                <x-vista-employment-registration-signature-bihar/>
                <x-vista-employment-registration-signature/>
                <x-vista-employment-registration-success-bihar/>
                <x-vista-employment-registration-success/>
                <x-vista-employment-termination-signature-bihar/>
                <x-vista-employment-termination-signature/>
                <x-vista-employment-termination-success-bihar/>
                <x-vista-employment-termination-success/>
                <x-vista-employment-variation-signature-bihar/>
                <x-vista-employment-variation-signature/>
                <x-vista-employment-variation-success-bihar/>
                <x-vista-employment-variation-success/>
                <x-vista-procedure-approve/>
                <x-vista-procedure-reject/>
                <x-vista-procedure-reminder-mail-data-gathering/>
                <x-vista-procedure-reminder-mail/>
                <x-vista-procedure-sad/>
                <x-vista-mail/>
                <x-vista-profile/>
                <x-vista-new/>
                <x-vista-paid/>
                <x-vista-paidSAD/>
                <x-vista-sad/>
                <x-vista-call_request/>
                <x-vista-service_closed_alert/>
                <x-vista-service_paused_alert/>
                <x-vista-carers/>
                <x-vista-errorCreateFamily/>

        </div>
    </div>
</body>
</html>
