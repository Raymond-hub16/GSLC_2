@extends('layout.main')

@section('container')



@foreach ($artikel as $artikel_index )

<article>
    <h1>{{ $artikel_index["judul"] }}</h1>
    @if ($artikel_index["author"] ==="Raymond")




    @endif
    @switch($artikel_index["kategori"])
        @case("1")
            <h5> Profile </h5>
            @break
    @case("2")
        <h5> SuperHero </h5>
    @break
        @default

    @endswitch


    <h5> {{ $artikel_index["author"] }}</h5>


    <p>
        {{ $artikel_index["isi"] }}
    </p>


</article>
@endforeach
@endsection
