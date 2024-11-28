@extends('layouts.admin')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
@endsection

@section('content')
<h4 class="py-3 mb-4">
    <span class="text-muted fw-light">Tables /</span> Wasit
</h4>

<div class="card">
    <div class="card-header">
        <div class="float-start">
            <h5>Wasit</h5>
        </div>
        <div class="float-end">
            <a href="{{ route('wasit.create') }}" class="btn btn-sm btn-primary">
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
                        <th>Nama Coach</th>
                        <th>sertifikata</th>
                        <th>Image</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @php $i = 1; @endphp
                    @foreach ($wasits as $wasit)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $wasit->name }}</td>
                        <td>{{ $wasit->sertifikat }}</td>
                        <td>
                            @if($wasit->image)
                            <img src="{{ asset('images/wasits/' . $wasit->image) }}" alt="{{ $wasit->name }}">
                            @else
                                <p>Gambar tidak tersedia</p>
                            @endif
                        </td>
                        <td>
                            <form action="{{ route('wasit.destroy', $wasit->id) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('wasit.edit', $wasit->id) }}" class="btn btn-sm btn-warning">
                                    <span class="menu-icon">
                                        <i class="bi bi-pencil-square" style="font-size: 18px;"></i>
                                      </span>
                                </a>
                                <a href="{{ route('wasit.destroy', $wasit->id) }}" type="submit" class="btn btn-sm btn-danger" data-confirm-delete="true">
                                    <span class="menu-icon">
                                        <i class="bi bi-trash3" style="font-size: 18px;"></i>
                                      </span>
                                </a>
                                {{-- <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus wasit ini?');">Hapus</button> --}}
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
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
<script>
    new DataTable('#example');
</script>
@endpush
