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
    <span class="text-muted fw-light">Forms /</span> Edit Pertandingan
</h4>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pertandingan.update', $pertandingans->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="boxer1_id" class="form-label">Nama Atlet 1</label>
                <select class="form-select @error('boxer1_id') is-invalid @enderror" id="boxer1_id" name="boxer1_id">
                    <option value="" disabled>Pilih atlet</option>
                    @foreach($boxers as $boxer)
                        <option value="{{ $boxer->id }}" {{ $boxer->id == $pertandingans->boxer1_id ? 'selected' : '' }}>
                            {{ $boxer->name }}
                        </option>
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
                    <option value="" disabled>Pilih atlet</option>
                    @foreach($boxers as $boxer)
                        <option value="{{ $boxer->id }}" {{ $boxer->id == $pertandingans->boxer2_id ? 'selected' : '' }}>
                            {{ $boxer->name }}
                        </option>
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
                    <option value="" disabled>Pilih wasit</option>
                    @foreach($wasits as $wasit)
                        <option value="{{ $wasit->id }}" {{ $wasit->id == $pertandingans->wasits_id ? 'selected' : '' }}>
                            {{ $wasit->name }}
                        </option>
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
                <input type="date" class="form-control @error('tanggal_pertandingan') is-invalid @enderror" id="tanggal_pertandingan" name="tanggal_pertandingan" value="{{ $pertandingans->tanggal_pertandingan }}">
                @error('tanggal_pertandingan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jam_pertandingan" class="form-label">Jam Pertandingan</label>
                <input type="time" class="form-control @error('jam_pertandingan') is-invalid @enderror" id="jam_pertandingan" name="jam_pertandingan" value="{{ \Carbon\Carbon::parse($pertandingans->jam_pertandingan)->format('H:i') }}">
                @error('jam_pertandingan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hasil_pertandingan" class="form-label">Hasil Pertandingan</label>
                <input type="text" class="form-control @error('hasil_pertandingan') is-invalid @enderror" id="hasil_pertandingan" name="hasil_pertandingan" value="{{ $pertandingans->hasil_pertandingan }}">
                @error('hasil_pertandingan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="lokasi" class="form-label">Lokasi Pertandingan</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" id="lokasi" name="lokasi" value="{{ $pertandingans->lokasi }}">
                @error('lokasi')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Venue</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar</small>
            </div>
            @if($pertandingans->image)
                <div class="mb-3">
                    <label class="form-label">Gambar Saat Ini</label>
                    <img src="{{ asset('images/pertandingans/' . $pertandingans->image) }}" alt="Gambar Venue" class="img-fluid" width="150">
                </div>
            @endif
            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('pertandingan.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const boxer1Select = document.getElementById('boxer1_id');
        const boxer2Select = document.getElementById('boxer2_id');

        // Fungsi untuk menonaktifkan opsi atlet yang sama
        function updateOptions() {
            const selectedBoxer1 = boxer1Select.value;
            const selectedBoxer2 = boxer2Select.value;

            Array.from(boxer1Select.options).forEach(option => {
                option.disabled = option.value === selectedBoxer2 && selectedBoxer2 !== '';
            });

            Array.from(boxer2Select.options).forEach(option => {
                option.disabled = option.value === selectedBoxer1 && selectedBoxer1 !== '';
            });
        }

        // Event listener untuk mengupdate opsi saat pilihan berubah
        boxer1Select.addEventListener('change', updateOptions);
        boxer2Select.addEventListener('change', updateOptions);

        // Jalankan fungsi pada saat load untuk mengatur nilai default
        updateOptions();
    });
</script>

@endsection
