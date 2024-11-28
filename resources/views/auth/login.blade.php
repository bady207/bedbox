@extends('layouts.app')

@section('content')
<style>
    /* Warna diubah langsung menjadi nilai heksadecimal */
    * {
        -webkit-font-smoothing: antialiased;
        text-rendering: optimizeLegibility;
    }

    html, body { height: 100%; }
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        position: relative;
        background: linear-gradient(
            135deg,
            rgba(36, 46, 77, .9),
            rgba(137, 126, 121, .9)
        );
        font-family: 'Roboto', helvetica, arial, sans-serif;
        font-size: 1.5em;
    }

    .login-form {
        width: 100%;
        padding: 2em;
        position: relative;
        background: rgba(0, 0, 0, .15);
    }

    .flex-row {
        display: flex;
        margin-bottom: 1em;
    }

    .lf--label {
        width: 2em;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #f5f6f8;
        cursor: pointer;
    }

    .lf--input {
        flex: 1;
        padding: 1em;
        border: 0;
        color: #8f8f8f;
        font-size: 1rem;
    }

    .lf--submit {
        display: block;
        padding: 1em;
        width: 100%;
        background: linear-gradient(to right, #35c3c1, #00d6b7);
        border: 0;
        color: #fff;
        cursor: pointer;
        font-size: .75em;
        font-weight: 600;
        text-shadow: 0 1px 0 rgba(0, 0, 0, .2);
    }

    .lf--forgot {
        margin-top: 1em;
        color: #00d6b7;
        font-size: .65em;
        text-align: center;
        position: relative;
    }

    ::placeholder { color: #8f8f8f; }

    .invalid-feedback {
        font-size: 0.9em;
        color: #ff6a6a;
        margin-top: 0.25em;
    }
    .invalid-feedback {
    color: red;
    font-size: 12px;
    margin-top: 5px;
    display: block;
}
.is-invalid {
    border-color: red;
}

</style>

<form class='login-form' method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email -->
    <div class="flex-row">
        <label class="lf--label" for="email">
            <svg x="0px" y="0px" width="12px" height="13px">
                <path fill="#B1B7C4" d="M8.9,7.2C9,6.9,9,6.7,9,6.5v-4C9,1.1,7.9,0,6.5,0h-1C4.1,0,3,1.1,3,2.5v4c0,0.2,0,0.4,0.1,0.7 C1.3,7.8,0,9.5,0,11.5V13h12v-1.5C12,9.5,10.7,7.8,8.9,7.2z"/>
            </svg>
        </label>
        <input id="email" class="lf--input form-control" placeholder='Email' type='email' name="email" value="{{ old('email') }}" required autofocus>
    </div>
    <!-- Pesan Error Email -->
    @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <!-- Password -->
    <div class="flex-row">
        <label class="lf--label" for="password">
            <svg x="0px" y="0px" width="15px" height="5px">
                <g>
                    <path fill="#B1B7C4" d="M6,2L6,2c0-1.1-1-2-2.1-2H2.1C1,0,0,0.9,0,2.1v0.8C0,4.1,1,5,2.1,5h1.7C5,5,6,4.1,6,2.9V3h5v1h1V3h1v2h1V3h1 V2H6z"/>
                </g>
            </svg>
        </label>
        <input id="password" class="lf--input form-control" placeholder='Password' type='password' name="password" required>
    </div>
    @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror

    <input class='lf--submit' type='submit' value='LOGIN'>
</form>
@endsection
