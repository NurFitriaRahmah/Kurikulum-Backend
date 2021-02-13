@extends('layout/main')

@section('title', 'Detail Negara')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <h1 class="mt-3">Detail Negara</h1>

                <div class="card">
                    <div class="card-body">
                        @foreach ($country as $n)
                            <h5 class="card-title">{{$n->name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Lokasi : {{$n->location}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Merdeka : {{$n->independence}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Ibukota : {{$n->capital}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Mata Uang : {{$n->currency}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Semboyan : {{$n->motto}}</h6>
                            <h6 class="card-subtitle mb-2 text-muted">Lagu Kebangsaan : {{$n->anthem}}</h6>
                            {{-- <p class="card-text">{{$p->publisher}}</p>
                            <p class="card-text">{{$p->qty}}</p> --}}

                            <a href="{{ $n->id }}/edit"><button type="submit" class="btn btn-primary">Edit</button></a>
                            <form action="/country/{{ $n->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                            </form>
                            <a href="/country" class="card-link">Kembali</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
