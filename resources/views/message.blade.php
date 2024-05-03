@extends('_layout')

@section('title')
    {{ $title ?? '¡Oops!' }}
@endsection

@section('content')
    <section class="hero is-info is-bold is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <h1 class="title">{{ $title ?? '¡Oops!' }}</h1>
                <h2 class="subtitle">{{ $message ?? 'Algo ha ido mal, por favor, inténtalo de nuevo.' }}</h2>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script src="{{ mix('dist/js/styles/index.js') }}" async defer></script>
@endsection
