@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Create Headphone</h1>

            {{-- Main --}}
            <form action="{{ route('headphone.store') }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Nama --}}
                <div class="form-group">
                    <label>Nama Headphone: </label>
                    <input type="text" class="form-control" name="nama" required>
                </div>
                
                {{-- Nama Brand --}}
                <div class="form-group">
                    <label>Nama Brand: </label>
                    <select name="brand" class="custom-select">
                        @foreach ($listbrand as $brand)
                                <option value="{{ $brand['brand_code'] }}">{{ $brand['nama'] }}</option>
                        @endforeach
                    </select>
                </div>

                {{-- Tahun --}}
                <div class="form-group">
                    <label>Tahun: </label>
                    <input type="number" class="form-control" name="tahun" required>
                </div>

                {{-- ANC --}}
                <div class="form-group">
                    <label>Noise Cancelling </label>
                    <select name="anc" class="custom-select">
                        <option value=1>Yes</option>
                        <option value=0>No</option>
                </div>

                {{-- Tipe --}}
                <div class="form-group">
                    <label>Tipe: </label>
                    <input type="text" class="form-control" name="tipe" required>
                </div>

                {{-- Wireless --}}
                <div class="form-group">
                    <label>Wireless: </label>
                    <input type="text" class="form-control" name="wireless" required>
                </div>

                {{-- Enclosure --}}
                <div class="form-group">
                    <label>Enclosure: </label>
                    <input type="text" class="form-control" name="enclosure" required>
                </div>

                {{-- Rating --}}
                <div class="form-group">
                    <label>Rating: </label>
                    <input type="number" class="form-control" name="rating" required>
                </div>

                {{-- Mic --}}
                <div class="form-group">
                    <label>Mic </label>
                    <select name="mic" class="custom-select">
                        <option value=1>Yes</option>
                        <option value=0>No</option>
                </div>

                {{-- Harga --}}
                <div class="form-group">
                    <label>Harga: </label>
                    <input type="number" class="form-control" name="harga" required>
                </div>

                {{-- Rating --}}
                <div class="form-group">
                    <label>Rating: </label>
                    <input type="number" class="form-control" name="rating" required>
                </div>
                
                {{-- Image --}}
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