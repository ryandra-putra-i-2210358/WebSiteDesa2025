@extends('back_site.layouts.app_admin')

@section('tittle-admin', 'Tambah Layanan')
@include('back_site.component.navbar_admin')

@section('main')
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800">Tambah Layanan Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Error:</strong>
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form action="{{ route('admin.layanans.store') }}" method="POST">
        @csrf

        {{-- Judul --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Judul Layanan</label>
            <input type="text" name="judul" class="form-control" value="{{ old('judul') }}" required>
        </div>

        {{-- Items (Dynamic) --}}
        <div class="mb-3">
            <label class="form-label fw-bold">Poin Layanan</label>
            <div id="items-container">
                <div class="input-group mb-2 item-row">
                    <input type="text" name="items[]" class="form-control" placeholder="Tuliskan poin layanan" required>
                    <button type="button" class="btn btn-danger remove-item">✕</button>
                </div>
            </div>
            <button type="button" id="add-item" class="btn btn-success btn-sm mt-2">+ Tambah Poin</button>
        </div>

        {{-- Submit --}}
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

{{-- JavaScript untuk Dynamic Items --}}
<script>
document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('items-container');
    const addBtn = document.getElementById('add-item');

    addBtn.addEventListener('click', function () {
        const newRow = document.createElement('div');
        newRow.classList.add('input-group', 'mb-2', 'item-row');
        newRow.innerHTML = `
            <input type="text" name="items[]" class="form-control" placeholder="Tuliskan poin layanan" required>
            <button type="button" class="btn btn-danger remove-item">✕</button>
        `;
        container.appendChild(newRow);
    });

    container.addEventListener('click', function (e) {
        if (e.target.classList.contains('remove-item')) {
            e.target.closest('.item-row').remove();
        }
    });
});
</script>
@endsection
