@extends('layout.mainlayout')

{{-- Title --}}
@section('title')
    <title>{{ $title }}</title>
@endsection

{{-- Gambar Carousel --}}
@section('carousel')
    @include ('layout.carousel')
@endsection

{{-- Footer --}}
@section('footer')
    @include ('layout.footer')
@endsection

{{-- Main --}}
@section('main_content')

    {{-- Tulisan Headphone & Tombol Headphone --}}
    <div class="container" style="margin: 5px 0px 5px 5px;">
        <h1 class="display-3">List Headphone</h1>
        <a class="btn btn-outline-success" href="{{ route('headphone.create') }}">Create Headphone</a>
    </div>

    {{-- Tabel Headphone --}}
    <div class="row row-cols-3 row-cols-md-3 g-4">

        @foreach ($listheadphone as $headphone)

            <div class="col">
                <div class="card text-center" style="width:100%; height:100%">

                    {{-- Image & Nama --}}
                    <a href="{{ route('headphone.show', $headphone->id) }}">
                        <img class="card-img-top" src="{{ url($headphone['image_path_headphone']) }}" alt="Card image" style="height:100%">
                    </a>
                    <div class="card-body">
                        <h5 class="card-title">{{ $headphone['name_headphone'] }}</h5>
                    </div>

                    {{-- Tombol Edit & Show --}}
                    <form action="{{ route('headphone.destroy', $headphone->id) }}" method="POST">
                        <a class="btn btn-outline-info" href="{{ route('headphone.show', $headphone->id) }}">Show</a>
                        <a class="btn btn-outline-warning" href="{{ route('headphone.edit', $headphone->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
@endsection
