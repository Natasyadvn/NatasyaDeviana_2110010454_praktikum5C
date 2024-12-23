@extends('template.default')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <h3>Ubah Data Ruang</h3>
        </div>
        <div class="col-md-6">
            <a href="{{ route('Ruang.index') }}" class="btn btn-primary btn-sm float-end">
                <i class="fa fa-arrow-circle-left">Kembali</i>
            </a>
        </div>
    </div>

    <div class="card px-3 py-3">
        <form action="{{ route('Ruang.update',$ruang->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_ruang">Nama Ruang</label>
                <input type="text"
                    class="form-control @error('nama_ruang') is-invalid @enderror"
                    name="nama_ruang"
                    id="nama_ruang"
                    value="{{ old('nama_ruang') ?? $ruang->nama_ruang }}" required>
                 @error('nama_ruang')

                    <p class="text-danger">{{ $message }}</p>

                 @enderror
            </div>
            <div class="col mb-3">
                <button class="btn btn-success" type="submit">
                    <i class="fas fa-save">Simpan</i>
                </button>
            </div>
        </form>
    </div>
@endsection