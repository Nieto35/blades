@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', [
            'url' => 'https://aiudo.es'
        ])
            <img style="height: 96px;" src="data:image/png;base64,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">
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © 2016-{{ date('Y') }} {{ config('company.legal_name') }}<br>
            @lang('All rights reserved.')
        @endcomponent
    @endslot
@endcomponent
