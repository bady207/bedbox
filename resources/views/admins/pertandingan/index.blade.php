@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Matches
</h4>

<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>Matches</h5>
        </div>
        <div class="float-end">
            <a href="{{ route('pertandingan.create') }}" class="btn btn-sm btn-primary">
                <span class="menu-icon">
                    <i class="bi bi-plus" style="font-size: 18px;"></i>
                  </span>
            </a>
        </div>
    </div>

    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table" id="example">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Atlet 1</th>
                        <th>Nama Atlet 2</th>
                        <th>Wasit</th>
                        <th>Tanggal Pertandingan</th>
                        <th>Waktu Pertandingan</th>
                        <th>Hasil Pertandingan</th>
                        <th>Lokasi</th>
                        <th>Gambar</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i = 1; @endphp
                    @foreach ($pertandingans as $pertandingan)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $pertandingan->boxer1->name }}</td> <!-- Gunakan relasi boxer1 -->
                        <td>{{ $pertandingan->boxer2->name }}</td> <!-- Gunakan relasi boxer2 -->
                        <td>{{ $pertandingan->wasits->name }}</td>
                        <td>{{ $pertandingan->tanggal_pertandingan }}</td> <!-- Perbaiki penamaan -->
                        <td>{{ $pertandingan->jam_pertandingan }}</td>
                        <td>{{ $pertandingan->hasil_pertandingan }}</td>
                        <td>{{ $pertandingan->lokasi }}</td>
                        <td>
                            @if($pertandingan->image)
                            <img src="{{ asset('images/pertandingans/' . $pertandingan->image) }}" alt="Gambar Pertandingan" width="100">
                            @else
                                <p>Gambar tidak tersedia</p>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('pertandingan.destroy', $pertandingan->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('pertandingan.edit', $pertandingan->id) }}" class="btn btn-sm btn-warning">
                                    <span class="menu-icon">
                                        <i class="bi bi-pencil-square" style="font-size: 18px;"></i>
                                      </span>
                                </a>
                                <a href="{{ route('pertandingan.destroy', $pertandingan->id) }}" type="submit" class="btn btn-sm btn-danger" data-confirm-delete="true">
                                    <span class="menu-icon">
                                        <i class="bi bi-trash3" style="font-size: 18px;"></i>
                                      </span>
                                </a>
                                {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pertandingan ini?');">Hapus</button> --}}
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush
