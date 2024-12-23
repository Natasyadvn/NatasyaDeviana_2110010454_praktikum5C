@extends('template.default')

@section('content')

    @if(session('success'))
        <div class="alert alert-primary" role="alert">
                {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <h3>Ruang</h3>
        </div>
        <div class="col-md-6">
            <a href="{{ route('Ruang.create')}}" class="btn btn-success btn-sm float-end">
                <i class="fa fa-plus-circle">Tambah</i>
            </a>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col">
            <table class="table bg-white shadow rounded shadow-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col" width="50">#</th>
                        <th scope="col">Ruang</th>
                        <th style="width: 200px">Aksi</th>
                    </tr>
                    <tbody>
                @foreach($ruangs as $ruang)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $ruang['nama_ruang']}}</td>
                    <td>@include('Ruang.action')</td>
                </tr>
                @endforeach
            </tbody>
                </thead>

            </table>
            
        </div>
    </div>
    <form action="" method="POST" id="deleteForm">
        @csrf
        @method('DELETE')
        <input type="submut" value="Hapus" style="display: none">
    </form>
@endsection