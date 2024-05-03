@extends ('modules.payroll._layout')

@section ('content')
    <section class="section">
        <div class="container">
            <img src="https://static.aiudo.es/img/aiudo_logo_slogan_3_0.png" style="max-width: 220px; margin-bottom: 20px;">
            <h1 class="title">Borrador de la nómina</h1>
            <h2 class="subtitle"><strong>¡Hola, {{ $customer->first_name }}!</strong></h2>
            <b-message type="is-info">Esta es la nómina que hemos generado con los datos que tenemos. Si encuentras que no refleja la realidad, hemos habilitado esta herramienta para que puedas modificarla. En caso de dudas o problemas, por favor, ponte en contacto con <a href="mailto:laboral@aiudo.es"><strong>laboral@aiudo.es</strong></a>.</b-message>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <payroll-draft :value="{{ json_encode($value) }}"
                           :base-price-hour="{{ Salary::getBasePriceHour() }}"
                           min-date="{{ $minDate }}"
                           max-date="{{ $maxDate }}"
                           endpoint="{{ route('external.payroll.update', [$model->id, $model->token]) }}"></payroll-draft>
        </div>
    </section>
@endsection
