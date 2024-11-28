@extends('layouts.admin')
@section('content')

<style>
    /* Mengatur warna placeholder untuk semua input dan textarea */
    input::placeholder, textarea::placeholder {
        color: #f8f9fa; /* Warna terang untuk placeholder */
        opacity: 1;
    }

    /* Mengatur warna teks dan border saat input dan textarea di-focus */
    input, input:focus, input:active,
    textarea, textarea:focus, textarea:active {
        color: white !important; /* Warna teks tetap terang saat mengetik */
        background-color: #343a40 !important; /* Warna latar belakang */
        border-color: #007bff !important; /* Warna border saat fokus */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important; /* Efek shadow saat fokus */
    }

    /* Menyesuaikan warna teks untuk elemen select saat di-focus */
    select, select:focus, select:active {
        color: white !important; /* Warna teks select tetap terang */
        background-color: #343a40 !important; /* Warna latar belakang */
        border-color: #007bff !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important;
    }
</style>

<div class="card mb-4">
    <h4 class="card-header">Profile Details</h4>
    <!-- Account -->
    <div class="card-body pt-2 mt-1">
        <form id="formAccountSettings" method="POST" action="{{ route('user.store') }}">
            @csrf
            <div class="row mt-2 gy-4">
                <div class="col-md-12">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control @error ('name') is-invalid @enderror" type="text" id="UserName"
                            name="name" placeholder="masukan username" autofocus>
                        <label for="UserName">Username</label>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating form-floating-outline">
                        <input class="form-control @error ('email') is-invalid @enderror" type="email" id="email"
                            name="email" placeholder="Masukan E-Mail">
                        <label for="email">E-mail</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating form-floating-outline">
                        <input type="password" class="form-control @error ('password') is-invalid @enderror"
                            id="password" name="password" placeholder="masukan password">
                        <label for="password">Password</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-floating form-floating-outline">
                        <select id="currency" class="select2 form-select @error('IsAdmin') is-invalid @enderror" name="IsAdmin">
                            <option value="" disabled selected>Select Role</option>
                            <option value="1">Admin</option>
                            <option value="0">User</option>
                        </select>
                        <label for="currency">Role</label>
                        @error('IsAdmin')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="btn btn-primary me-2 waves-effect waves-light">Save</button>
                <button type="reset" class="btn btn-outline-secondary waves-effect">Reset</button>
            </div>
        </form>
    </div>
    <!-- /Account -->
</div>

@endsection
