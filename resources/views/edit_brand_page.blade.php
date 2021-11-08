@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit Brand</h1>

            {{-- Main --}}
            <form action="{{ route('brand.update', $listbrand->brand_code) }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Nama --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Nama Brand: </label>
                    <input type="text" class="form-control" name="nama" value="{{ $listbrand->nama }}" required>
                </div>

                {{-- Asal --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Asal Brand: </label>
                    <input type="text" class="form-control" name="asal" value="{{ $listbrand->asal }}" required>
                </div>
                
                {{-- Image --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Image: </label>
                    <input type="file" name="img_path" accept="image/*">
                </div>
                
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection