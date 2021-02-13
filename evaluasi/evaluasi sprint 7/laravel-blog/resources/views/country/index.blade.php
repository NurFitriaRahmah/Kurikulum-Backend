@extends('layout/main')

@section('title', 'Daftar-Negara')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Daftar Negara</h1>

                <a href="/country/create" class="btn btn-primary my-3">Tambah Data Negara</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <ul class="list-group">
                    @foreach ($country as $n)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{$n->name}}
                            <a href="/country/{{$n->id}}" class="badge badge-info">Detail</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
