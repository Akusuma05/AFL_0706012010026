@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create Brand</h1>

            {{-- Main --}}
            <form action="{{ route('brand.store') }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label>Nama Brand: </label>
                    <input type="text" class="form-control" name="nama" required>
                </div>

                <div class="form-group">
                    <label>Asal Brand: </label>
                    <input type="text" class="form-control" name="asal" required>
                </div>
                
                <div class="form-group">
                    <label>Image: </label>
                    <input type="file" name="img_path" accept="image/*">
                </div>
                
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Create</button>
                </div>
            </form>
        </div>
    </div>
@endsection