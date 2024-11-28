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

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Edit Pelatih
</h4>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pelatih.update', $pelatihs->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $pelatihs->name) }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pengalaman" class="form-label">Pengalaman</label>
                <input type="text" class="form-control @error('pengalaman') is-invalid @enderror" id="pengalaman" name="pengalaman" value="{{ old('pengalaman', $pelatihs->pengalaman) }}">
                @error('pengalaman')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if ($pelatihs->image)
                    <img src="{{ asset('images/pelatihs/' . $pelatihs->image) }}" alt="{{ $pelatihs->name }}" width="100" class="mt-2">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('pelatih.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
