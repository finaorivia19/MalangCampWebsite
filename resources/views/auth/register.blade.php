@extends('layoutAbun')

@section('content')
<div class="box-form-signup">
    <div class="text">
        Sign Up Now
    </div>
    <div class="form-signup">
        @csrf
        <form action="" method="POST">
            <div class="kolom">
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="Your Name" {{--required autocomplete="name" autofocus--}}>

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="Username" {{--required autocomplete="name" autofocus--}}>

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="Email Address" {{--required autocomplete="name" autofocus--}}>

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="Password" {{--required autocomplete="name" autofocus--}}>

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="Phone Number" {{--required autocomplete="name" autofocus--}}>

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom">
                <input {{--id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"--}} placeholder="Your Address" {{--required autocomplete="name" autofocus--}}>

                {{-- @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror --}}
            </div>

            <div class="kolom-submit">
                <button type="submit" class="btn-signup">
                    {{ __('SIGN UP') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
