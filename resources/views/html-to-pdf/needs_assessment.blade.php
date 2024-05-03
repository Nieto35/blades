<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toma de necesidades de Nombre compañía</title>
</head>
<body>
<div class="row">
    <div class="col-md-12">
        <div class="box box-payroll">
            <div class="box-body">
                <style>
                    .invoice-box {
                        max-width: 800px;
                        margin: auto;
                        padding: 30px;
                        border: 1px solid #eee;
                        box-shadow: 0 0 10px rgba(0, 0, 0, .15);
                        background: #fff;
                        font-size: 16px;
                        line-height: 24px;
                        font-family: 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
                        color: #555;
                    }

                    .invoice-box table {
                        width: 100%;
                        line-height: inherit;
                        text-align: left;
                    }

                    .invoice-box table td {
                        padding: 5px;
                        vertical-align: top;
                    }

                    .invoice-box table tr.top table td.title {
                        font-size: 45px;
                        line-height: 45px;
                        color: #333;
                    }

                    .invoice-box table tr.heading td {
                        background: #eee;
                        border-bottom: 1px solid #ddd;
                        font-weight: bold;
                    }

                    .invoice-box table tr.heading.dark td {
                        background: #ddd;
                    }

                    .invoice-box table tr.item td{
                        border-bottom: 1px solid #eee;
                    }

                    .invoice-box table tr.item.last td {
                        border-bottom: none;
                    }

                    .invoice-box table tr.subtotal td:not(:first-child) {
                        border-top: 2px solid #eee;
                        font-weight: bold;
                    }

                    .invoice-box table tr.total td:not(:first-child) {
                        border-top: 2px solid #eee;
                        font-weight: bold;
                    }

                    @media only screen and (max-width: 600px) {
                        .invoice-box table tr.top table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
                        .invoice-box table tr.information table td {
                            width: 100%;
                            display: block;
                            text-align: center;
                        }
                    }
                </style>
                <div class="invoice-box">
    <table cellpadding="0" cellspacing="0">
        <tr class="top">
            <td colspan="5">
                <table>
                    <tr>
                        <td class="title">
                            <img src="https://static.aiudo.es/img/aiudo_logo_slogan_3_0.png" style="width:80%; max-width:180px;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <h1>Resumen de la entrevista</h1>
                            <p><b>¡Hola, [Nombre del cliente]!</b> Aquí te
                                resumimos el contenido de la entrevista que te hemos realizado sobre los detalles del
                                servicio. Por favor, léelo con detenimiento. Al final de la página podrás ACEPTAR o
                                RECHAZAR el contenido.
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <h3>Proceso exprés</h3>
                            <p>Recuerde que con el proceso express seleccionaremos al perfil para que se incorpore directamente a su domicilio. Una vez lo tengamos le llamaremos para informarle sobre este.</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <h3>Género Trabajo</h3>
                            <p>
                                <span>Perfil Numero perfil</span>
                                <span>Género del trabajador</span>
                                <span>Entre edad mínima y edad máxima años</span>
                            </p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <h3>Horario</h3>
                            <p>Horario del trabajo</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <h2>Variables del salario</h2>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <table>
                    <tr>
                        <td>
                            <ul>
                                <li>Concepto de ajuste (+precio_por_unidad * cantidad €)</li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <h2>Usuarios a cuidar</h2>
            </td>
        </tr>
        <tr>
            <td colspan="5">
                <div class="invoice-box">
                    <table cellpadding="0" cellspacing="0">
                        <tr class="heading">
                            <td>
                                <h2>Nombre del paciente</h2>
                                <p><span>Usuario número</span>
                                    <span>Género del paciente</span>
                                    <span>Edad del paciente años</span></p>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Patología principal</h4>
                                <p>Patología principal del paciente</p>
                            </td>
                            <td>
                                <h4>Patologías</h4>
                                <span class="tag">Patologías del paciente</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Rasgos de personalidad</h4>
                                <span>Rasgos de personalidad del paciente</span>
                            </td>
                            <td>
                                <h4>Peso en KG</h4>
                                <p>Peso del paciente</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Anotaciones de salud</h4>
                                <p>Anotaciones sobre la salud del paciente</p>
                            </td>
                            <td>
                                <h4>Alergias a medicamentos</h4>
                                <p>Alergias a medicamentos del paciente</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Movilidad</h4>
                                <p>Descripción de la movilidad del paciente</p>
                            </td>
                            <td>
                                <h4>Dieta</h4>
                                <p>Descripción de la dieta del paciente</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Anotaciones sobre la dieta</h4>
                                <p>Anotaciones sobre la dieta del paciente</p>
                            </td>
                            <td>
                                <h4>Frecuencia del aseo</h4>
                                <p>Frecuencia del aseo del paciente</p>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Acerca del aseo</h4>
                                <p>Anotaciones sobre el aseo del paciente</p>
                            </td>
                        </tr>
                    </table>
                    <div>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <h2>Tareas a realizar</h2>
                <ul>
                    <li>Tareas a realizar</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Imprescindibles</h2>
                <ul>
                    <li>Tendrá carné de conducir</li>
                    <li>Tendrá vehículo propio</li>
                    <li>Trabajará festivos</li>
                    <li>Imprescindible</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Estudios requeridos</h2>
                <ul>
                    <li>Estudios requeridos</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <h2>Rasgos de la personalidad</h2>
                <ul>
                    <li>Rasgos de la personalidad</li>
                </ul>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <h2>Datos del domicilio</h2>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>
                <h4>Tipo de domicilio</h4>
                <p>Tipo de domicilio</p>
            </td>
            <td>
                <h4>Metros cuadrados (m2)</h4>
                <p>Metros cuadrados (m2) del domicilio</p>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Nº habitantes</h4>
                <p>Número de habitantes</p>
            </td>
            <td>
                <h4>Mascotas</h4>
                <p>No hay</p>
                <p>Lista de mascotas</p>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Localización</h4>
                <p>Localización del domicilio</p>
            </td>
            <td>
                <h4>Datos sobre el acceso</h4>
                <p>Datos sobre el acceso al domicilio</p>
            </td>
        </tr>
        <tr>
            <td>
                <h4>Ayudas técnicas</h4>
                <p>No hay</p>
                <p>Lista de ayudas técnicas</p>
            </td>
            <td>
                <h4>Anotaciones sobre el domicilio</h4>
                <p>Anotaciones sobre el domicilio</p>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
