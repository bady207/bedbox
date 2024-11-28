@extends('layouts.admin')

@section('content')

<style>
    /* Mengatur warna placeholder untuk semua input */
    input::placeholder {
        color: #f8f9fa;
        opacity: 1;
    }

    /* Mengatur warna teks dan border saat input di-focus */
    input, input:focus, input:active {
        color: white !important;
        background-color: #343a40 !important;
        border-color: #007bff !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important;
    }

    /* Menyesuaikan warna teks untuk elemen select saat di-focus */
    select, select:focus, select:active {
        color: white !important;
        background-color: #343a40 !important;
        border-color: #007bff !important;
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25) !important;
    }
</style>

<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Forms /</span> Tambah Pertandingan
</h4>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pertandingan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="boxer1_id" class="form-label">Nama Atlet 1</label>
                <select class="form-select @error('boxer1_id') is-invalid @enderror" id="boxer1_id" name="boxer1_id">
                    <option value="">Pilih atlet</option>
                    @foreach($boxers as $boxer)
                        <option value="{{ $boxer->id }}">{{ $boxer->name }}</option>
                    @endforeach
                </select>
                @error('boxer1_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="boxer2_id" class="form-label">Nama Atlet 2</label>
                <select class="form-select @error('boxer2_id') is-invalid @enderror" id="boxer2_id" name="boxer2_id">
                    <option value="">Pilih atlet</option>
                    @foreach($boxers as $boxer)
                        <option value="{{ $boxer->id }}">{{ $boxer->name }}</option>
                    @endforeach
                </select>
                @error('boxer2_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="wasits_id" class="form-label">Wasit Pemimpin</label>
                <select class="form-select @error('wasits_id') is-invalid @enderror" id="wasits_id" name="wasits_id">
                    <option value="">Pilih wasit</option>
                    @foreach($wasits as $wasit)
                        <option value="{{ $wasit->id }}">{{ $wasit->name }}</option>
                    @endforeach
                </select>
                @error('wasits_id')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal_pertandingan" class="form-label">Tanggal Pertandingan</label>
                <input type="date" class="form-control @error('tanggal_pertandingan') is-invalid @enderror" id="tanggal_pertandingan" name="tanggal_pertandingan">
                @error('tanggal_pertandingan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="jam_pertandingan" class="form-label">Jam Pertandingan</label>
                <input type="time" class="form-control @error('jam_pertandingan') is-invalid @enderror" id="jam_pertandingan" name="jam_pertandingan">
                @error('jam_pertandingan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="hasil_pertandingan" class="form-label">Hasil Pertandingan</label>
                <input type="text" class="form-control @error('hasil_pertandingan') is-invalid @enderror" id="hasil_pertandingan" name="hasil_pertandingan" placeholder="Masukan Hasil Pertandingan">
                @error('hasil_pertandingan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Pertandingan</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" placeholder="Masukan Lokasi Pertandingan">
                @error('lokasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar Venue</label>
                <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                @error('image')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pertandingan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const boxer1Select = document.getElementById('boxer1_id');
        const boxer2Select = document.getElementById('boxer2_id');

        function disableSelectedBoxer() {
            const selectedBoxer1 = boxer1Select.value;
            const selectedBoxer2 = boxer2Select.value;

            // Reset options
            Array.from(boxer2Select.options).forEach(option => {
                option.disabled = false;
                if (option.value === selectedBoxer1) option.disabled = true;
            });

            Array.from(boxer1Select.options).forEach(option => {
                option.disabled = false;
                if (option.value === selectedBoxer2) option.disabled = true;
            });
        }

        boxer1Select.addEventListener('change', disableSelectedBoxer);
        boxer2Select.addEventListener('change', disableSelectedBoxer);

        // Call initially to set disabled options
        disableSelectedBoxer();
    });
</script>
@endsection
