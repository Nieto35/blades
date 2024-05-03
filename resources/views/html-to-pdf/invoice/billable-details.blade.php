@if ($invoice->billable)
    @switch ($invoice->billable->getTable())
        @case ((new App\Entities\Customer)->getTable())
            @php
                $identity = $invoice->billable->identities()->anyOfType([
                    App\Entities\Identity::TYPE_DNI,
                    App\Entities\Identity::TYPE_NIE
                ])->latest()->first();
            @endphp
            <strong>{{ $invoice->billable->name }}</strong>
            <br>
            {{ optional($identity)->number }}
            <br>
            {{ optional($invoice->billable->address)->short_address }}<br>
            {{ optional($invoice->billable->address)->short_location }}<br>
            @break
        @case ((new App\Entities\Lead)->getTable())
            @php
                $identity = $invoice->billable->identities()->anyOfType([
                    App\Entities\Identity::TYPE_DNI,
                    App\Entities\Identity::TYPE_NIE
                ])->latest()->first();
            @endphp
            <strong>{{ $invoice->billable->name }}</strong>
            <br>
            {{ optional($identity)->number }}
            <br>
            {{ $invoice->billable->address_line }}<br>
            {{ $invoice->billable->address_locality }} ({{ $invoice->billable->address_postal_code }})<br>
            {{ $invoice->billable->address_country }}<br>
            @break
    @endswitch
@else
    <strong>Esta factura no está vinculada a ningún cliente.</strong>
@endif
