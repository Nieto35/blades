<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Tu nómina</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body>
        <div class="container">
            <div class="box box-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="py-4">
                            <p class="text-right">Nombre del cuidador/a</p>
                            <p class="text-right">NIF/CIF: NIF/CIF del empleador/a</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <style>.table .bg { background-color: #ddd; }</style>
                        <table class="table table-bordered table-condensed table-sm">
                            <tbody>
                            <tr class="bg">
                                <th colspan="3">EMPRESA</th>
                                <th colspan="2">DOMICILIO</th>
                                <th colspan="2">Nº INSCRIPCIÓN S.S.</th>
                            </tr>
                            <tr class="text-center">
                                <td colspan="3">Nombre de la empresa</td>
                                <td colspan="2">Dirección de la empresa</td>
                                <td colspan="2">Nº de inscripción en la Seguridad Social</td>
                            </tr>
                            <tr class="bg">
                                <th colspan="2">TRABAJADOR</th>
                                <th colspan="2">CATEGORÍA</th>
                                <th>PUESTO DE TRABAJO</th>
                                <th>ANTIGÜEDAD</th>
                                <th>D.N.I.</th>
                            </tr>
                            <tr class="text-center">
                                <td colspan="2">Nombre del cuidador/a</td>
                                <td colspan="2">TRAMO Tramo de la nómina</td>
                                <td>Empleado/a de hogar</td>
                                <td>Fecha de antigüedad</td>
                                <td>NIF del cuidador/a</td>
                            </tr>
                            <tr class="bg">
                                <th>Nº AFILIACIÓN S.S.</th>
                                <th>TARIFA</th>
                                <th>EPIG.</th>
                                <th>SECCIÓN</th>
                                <th>NRO.</th>
                                <th>PERIODO</th>
                                <th>TOT. DÍAS</th>
                            </tr>
                            <tr class="text-center">
                                <td>Nº de afiliación a la Seguridad Social</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Fecha de inicio del período - Fecha de fin del período</td>
                                <td>Número total de días</td>
                            </tr>
                            <tr class="bg">
                                <th>CUANTÍA</th>
                                <th>PRECIO</th>
                                <th colspan="3">CONCEPTO</th>
                                <th>DEVENGOS</th>
                                <th>DEDUCCIONES</th>
                            </tr>
                                <tr>
                                    <td class="text-right">Cantidad del artículo</td>
                                    <td class="text-right">Precio unitario del artículo</td>
                                    <td class="text-right">Loop index</td>
                                    <td colspan="2">Nombre del concepto del artículo</td>
                                    <td class="text-right">Costo del artículo (si es positivo)</td>
                                    <td class="text-right">Costo del artículo (si es negativo)</td>
                                </tr>
                                    <tr>
                                        <td class="text-right"></td>
                                        <td class="text-right"></td>
                                        <td class="text-right">Loop index</td>
                                        <td colspan="2">Nombre de la cotización del empleado/a (Porcentaje de la cotización)</td>
                                        <td class="text-right"></td>
                                        <td class="text-right">Costo de la cotización</td>
                                    </tr>
                            <tr class="bg">
                                <th>REM. TOTAL</th>
                                <th>P.P. EXTRAS</th>
                                <th>BASE C.C.</th>
                                <th>BASE A.T. Y DES</th>
                                <th>BASE I.R.P.F.</th>
                                <th>T. DEVENGADO</th>
                                <th>T. A DEDUCIR</th>
                            </tr>
                            <tr class="text-center">
                                <td></td>
                                <td></td>
                                <td>Total de la base de cotización</td>
                                <td>Total de la base de cotización</td>
                                <td></td>
                                <td class="text-right">Costo bruto del ingreso</td>
                                <td class="text-right">Costo de la cotización</td>
                            </tr>
                                <tr class="bg">
                                    <th>CUANTÍA</th>
                                    <th>PRECIO</th>
                                    <th colspan="3">CONCEPTO</th>
                                    <th>DEVENGOS</th>
                                    <th>DEDUCCIONES</th>
                                </tr>
                                    <tr>
                                        <td class="text-right">Cantidad del artículo</td>
                                        <td class="text-right">Precio unitario del artículo</td>
                                        <td class="text-right">Loop index</td>
                                        <td colspan="2">Nombre del concepto del artículo</td>
                                        <td class="text-right">Costo del artículo (si es positivo)</td>
                                        <td class="text-right">Costo del artículo (si es negativo)</td>
                                    </tr>
                            <tr>
                                <td colspan="2">
                                    <p>FECHA</p>
                                    <p>Fecha de creación de la nómina</p>
                                    <p class="mb-0">Localidad del empleador/a</p>
                                </td>
                                <td colspan="2">
                                    <p>SELLO EMPRESA</p>
                                </td>
                                <td colspan="2">
                                    <p>RECIBÍ</p>
                                </td>
                                <td>
                                    <div style="border: 2px solid black; margin-bottom: 1rem; padding: 1rem;">
                                        <p class="mb-0">Líquido a percibir</p>
                                    </div>
                                    <div style="border: 2px solid black; margin-bottom: 1rem; padding: 1rem;">
                                        <p class="mb-0 text-right">Monto neto del ingreso</p>
                                    </div>
                                </td>
                            </tr>
                            <tr class="bg small">
                                <th colspan="7">DETERMINACIÓN DE LAS BASES DE COTIZACIÓN A LA S.S. Y CONCEPTOS DE RECAUDACIÓN CONJUNTA Y DE LA BASE SUJETA A RETENCIÓN DEL IRPF Y APORTACIÓN DE LA EMPRESA</th>
                            </tr>
                            <tr class="bg">
                                <th colspan="3">CONCEPTO</th>
                                <th>BASE</th>
                                <th>TIPO</th>
                                <th colspan="2">APORTACIÓN EMPRESA</th>
                            </tr>
                                <tr>
                                    <td colspan="3">Nombre del concepto</td>
                                    <td class="text-center">Base del concepto</td>
                                    <td class="text-center">Porcentaje del concepto</td>
                                    <td colspan="2" class="text-center">Costo de la cotización</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
