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
    <span class="text-muted fw-light">Forms /</span> Edit Atlet
</h4>

<div class="card">
    <div class="card-body">
        <form action="{{ route('atlet.update', $boxer->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Atlet</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $boxer->name) }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="weight_class" class="form-label">Berat Badan</label>
                <input type="text" class="form-control @error('weight_class') is-invalid @enderror" id="weight_class" name="weight_class" value="{{ old('weight_class', $boxer->weight_class) }}">
                @error('weight_class')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="negara" class="form-label">Negara</label>
                <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" name="negara" value="{{ old('negara', $boxer->negara) }}">
                @error('negara')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="pelatihs_id" class="form-label">Pelatih</label>
                <select class="form-select @error('pelatihs_id') is-invalid @enderror" id="pelatihs_id" name="pelatihs_id">
                    <option value="" disabled selected>Pilih Pelatih</option>
                    @foreach($pelatihs as $pelatih)
                        <option value="{{ $pelatih->id }}" {{ old('pelatihs_id', $boxer->pelatihs_id) == $pelatih->id ? 'selected' : '' }}>{{ $pelatih->name }}</option>
                    @endforeach
                </select>
                @error('pelatihs_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="win" class="form-label">Win</label>
                <input type="text" class="form-control @error('win') is-invalid @enderror" id="win" name="win" value="{{ old('win', $boxer->win) }}">
                @error('win')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lose" class="form-label">Lose</label>
                <input type="text" class="form-control @error('lose') is-invalid @enderror" id="lose" name="lose" value="{{ old('lose', $boxer->lose) }}">
                @error('lose')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if ($boxer->image)
                    <img src="{{ asset('images/boxers/' . $boxer->image) }}" alt="{{ $boxer->name }}" width="100">
                @endif
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('atlet.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
