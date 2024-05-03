<form action="{{ route('shared.customer.store-lead') }}" method="POST">
    <div class="columns is-multiline">
        @csrf
        <input type="hidden" name="referrer" value="{{$referrer->code}}">

        <div class="column is-half-tablet">
            <div class="field">
                <label class="label">Nombre <span class="has-text-danger">*</span></label>
                <div class="control">
                    <input required class="input @error('name') is-invalid @enderror" name="name" type="text" value="{{ old('name') }}">
                </div>
                @error('name')
                    <div class="help is-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="column is-half-tablet">
            <div class="field">
                <label class="label">Teléfono <span class="has-text-danger">*</span></label>
                <div class="control">
                    <input required class="input @error('phone') is-invalid @enderror" name="phone" type="text" value="{{ old('phone') }}">
                </div>
                @error('phone')
                    <div class="help is-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="column is-half-tablet">
            <div class="field">
                <label class="label">Email <span class="has-text-danger">*</span></label>
                <div class="control">
                    <input required class="input @error('email') is-invalid @enderror" name="email" type="email" value="{{ old('email') }}">
                </div>
                @error('email')
                    <div class="help is-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="column is-half-tablet">
            <div class="field">
                <label class="label">Código postal</label>
                <div class="control">
                    <input class="input @error('cp') is-invalid @enderror" name="cp" type="text" value="{{ old('cp') }}">
                </div>
                @error('cp')
                    <div class="help is-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="column is-12 is-centered">
            <div class="field">
                <div class="control">
                    <input class="button is-primary" type="submit">
                </div>
            </div>
        </div>
    </div>
</form>
