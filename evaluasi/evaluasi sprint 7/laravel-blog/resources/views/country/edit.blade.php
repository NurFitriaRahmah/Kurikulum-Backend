@extends('layout/main')

@section('title', 'Detail Negara')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h1 class="mt-3">Form Edit Data Negara</h1>

                @foreach ($country as $n)
                    <form method="POST" action="/country/{{$n->id}}">
                        @method('patch')
                        @csrf
                        <div class="form-group">
                            <label for="name">Nama Negara</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Nama Negara" name="name" value="{{$n->name}}">
                            @error('name')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="location">Lokasi</label>
                            <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" placeholder="Lokasi" name="location" value="{{$n->location}}">
                            @error('location')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="independence">Merdeka</label>
                            <input type="text" class="form-control @error('independence') is-invalid @enderror" id="independence" placeholder="Merdeka" name="independence" value="{{$n->independence}}">
                            @error('independence')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="capital">Ibukota</label>
                            <input type="text" class="form-control @error('capital') is-invalid @enderror" id="capital" placeholder="Ibukota" name="capital" value="{{$n->capital}}">
                            @error('capital')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="currency">Mata Uang</label>
                            <input type="text" class="form-control @error('currency') is-invalid @enderror" id="currency" placeholder="Mata Uang" name="currency" value="{{$n->currency}}">
                            @error('currency')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="motto">Semboyan</label>
                            <input type="textarea" class="form-control @error('motto') is-invalid @enderror" id="motto" placeholder="Motto" name="motto" value="{{$n->motto}}">
                            @error('motto')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="anthem">Lagu Kebangsaan</label>
                            <input type="text" class="form-control @error('anthem') is-invalid @enderror" id="anthem" placeholder="Lagu Kebangsaan" name="anthem" value="{{$n->anthem}}">
                            @error('anthem')
                                <div class="invalid-feedback">{{$message}}</div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Edit Data</button>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
@endsection
