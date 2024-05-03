<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tu factura de "Nombre de la empresa"</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
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

                            .invoice-box table tr td:not(:nth-child(1)) {
                                text-align: right;
                            }

                            .invoice-box table tr.top table td {
                                padding-bottom: 20px;
                            }

                            .invoice-box table tr.top table td.title {
                                font-size: 45px;
                                line-height: 45px;
                                color: #333;
                            }

                            .invoice-box table tr.information table td {
                                padding-bottom: 40px;
                            }

                            .invoice-box table tr.heading td {
                                background: #eee;
                                border-bottom: 1px solid #ddd;
                                font-weight: bold;
                            }

                            .invoice-box table tr.heading.dark td {
                                background: #ddd;
                            }

                            .invoice-box table tr.details td {
                                padding-bottom: 20px;
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
                                                <td>
                                                    <h1>FACTURA</h1>
                                                    <h2>"Referencia de la factura"</h2>
                                                    <br>
                                                    Fecha: "Fecha de vencimiento de la factura"<br>
                                                    Pago: "Método de pago de la factura"
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="information">
                                    <td colspan="5">
                                        <table>
                                            <tr>
                                                <td>
                                                    <strong>"Nombre legal de la empresa"</strong><br>
                                                    "Dirección de la empresa"<br>
                                                    "Código postal de la empresa" "Ciudad de la empresa", "País de la empresa"<br><br>
                                                    "CIF de la empresa"<br>
                                                    "Teléfono de la empresa"<br>
                                                    "Correo electrónico de la empresa"<br>
                                                    <a href="Sitio web de la empresa" target="_blank">Sitio web de la empresa</a>
                                                </td>
                                                <td>
                                                    "Detalles de facturación"
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr class="heading">
                                    <td>Descripción</td>
                                    <td>Cantidad</td>
                                    <td>Precio unitario</td>
                                    <td>IVA</td>
                                    <td>Total</td>
                                </tr>
                                <tr class="item">
                                    <td>"Concepto del artículo"</td>
                                    <td>"Cantidad del artículo"</td>
                                    <td>"Precio unitario del artículo" €</td>
                                    <td>"Porcentaje de IVA del artículo" %</td>
                                    <td>"Total del artículo" €</td>
                                </tr>
                                <tr class="item">
                                    <td colspan="5" style="text-align: center;">No hay artículos</td>
                                </tr>
                                <tr class="item subtotal">
                                    <td></td>
                                    <td colspan="3" style="text-align: left;"><strong>SUBTOTAL</strong></td>
                                    <td>"Total sin impuestos de la factura" €</td>
                                </tr>
                                <tr class="item">
                                    <td></td>
                                    <td colspan="3" style="text-align: left;">IVA</td>
                                    <td>"Total solo impuestos de la factura" €</td>
                                </tr>
                                <tr class="total">
                                    <td></td>
                                    <td colspan="3" style="text-align: left;"><strong>TOTAL</strong></td>
                                    <td>"Total de la factura" €</td>
                                </tr>
                                <tr class="gdpr">
                                    <td colspan="5" style="text-align: left;">
                                        <strong>Cuenta bancaria</strong>
                                        <p>ES22 0081 0145 0100 0358 7168</p>
                                    </td>
                                </tr>
                                <tr class="gdpr">
                                    <td colspan="5" style="text-align: left;">
                                        <p><small>AUXISTENCIA SL garantiza la protección y confidencialidad de los datos personales que nos proporcionen de acuerdo con lo dispuesto en el Reglamento General de Protección de Datos (en adelante, RGPD) y en la Ley Orgánica 3/2018. Le informamos que

 sus datos de carácter personal tienen como finalidad gestionar las comunicaciones y relaciones empresariales. En cumplimiento de lo establecido en el RGPD, usted podrá ejercer los derechos contemplados en los artículos 15 a 22 RGPD en los términos establecidos en el mismo, dirigiéndose a Ronda Circunvalación, 188, 12003, Castellón de la Plana, o escribiendo un correo a administracion@aiudo.es adjuntando copia de su DNI.</small></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
```