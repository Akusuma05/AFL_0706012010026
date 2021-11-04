@extends('layout.mainlayout')

{{-- title --}}
@section('title')
    <title>{{ $title }}</title>
@endsection

{{-- Carousel --}}
@section('carousel')
    @include ('layout.carousel')
@endsection

{{-- Footer --}}
@section('footer')
    @include ('layout.footer')
@endsection

{{-- Main --}}
@section('main_content')
    {{-- Create Brand Button & Tulisan List Brand --}}
    <div class="container" style="margin: 5px 5px 5px 5px;">
        <h1 class="display-3">List Brand</h1>
        <a class="btn btn-outline-success" href="{{ route('brand.create') }}">Create Brand</a>
    </div>

    {{-- Tabel Brand --}}
    <div class="row row-cols-4 row-cols-md-4 g-4">

        @foreach ($listbrand as $brand)

            <div class="col">
                <div class="card text-center" style="width:100%">
                    <br>
                    <a href="{{ route('brand.show', $brand->brand_code) }}">
                        <img class="card-img-top" src="{{ url($brand['image_path_brand']) }}" alt="Card image" style="height:200px">
                    </a>
                    <div class="card-body">
                        <h4 class="card-title">{{ $brand['nama'] }}</h4>

                        {{-- Button Show & Edit --}}
                        <form action="{{ route('brand.destroy', $brand->brand_code) }}" method="POST">
                            <a class="btn btn-outline-info" href="{{ route('brand.show', $brand->brand_code) }}">Show</a>
                            <a class="btn btn-outline-warning"
                                href="{{ route('brand.edit', $brand->brand_code) }}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Delete</button>
                        </form>

                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <br>
    <br>
    <br>
@endsection
