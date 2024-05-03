@extends('site.layouts.lead')

@section('content')
    @include ('site.views.quote.index.navbar')
    <div class="section">
        <div class="container">
            <div class="columns is-centered" style="margin-bottom: 0 !important;">
                <div class="column is-12-mobile is-three-fifths-tablet">
                    <div class="lead__content">
                        <h1 class="title has-text-centered"></h1>
                        <div class="card">
                            <div class="card-header">
                                <p class="card-header-icon"><span class="icon"><i class="fas fa-user"></i></span></p>
                                <p class="card-header-title">Contacto</p>
                            </div>
                            <div class="card-content">
                                @include ('site.views.lead.form')
                            </div>
                            <div class="card-footer">
                                <p class="card-footer-item is-italic">
                                    Referido por {{ $referrer_name }}
                                </p>
                            </div>
                        </div>
                        @if ($errors->any())
                            <div class="notification is-danger is-multiline">
                                @foreach ($errors->all() as $error)
                                <p>{{ $error }}</p>
                                @endforeach
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="notification is-success">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include ('site.views.quote.index.footer')
@endsection
