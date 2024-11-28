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
    <span class="text-muted fw-light">Forms /</span> Edit Berita
</h4>

<div class="card">
    <div class="card-body">
        <!-- Form update berita -->
        <form action="{{ route('berita.update', $beritas->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Judul Berita</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $beritas->title) }}">
                @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Isi Berita</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="4">{{ old('content', $beritas->content) }}</textarea>
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="penulis" class="form-label">Penulis Berita</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" id="penulis" name="penulis" value="{{ old('penulis', $beritas->penulis) }}">
                @error('penulis')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Foto</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*">
                @if ($beritas->image)
                    <img src="{{ asset('images/beritas/' . $beritas->image) }}" alt="{{ $beritas->title }}" width="100">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('berita.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
