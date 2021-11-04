@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
    <div class="container">
        <div class="row justify-content-center">
            <h1>Edit Headphone</h1>

            {{-- Main --}}
            <form action="{{ route('headphone.update', $listheadphone->id) }}" enctype="multipart/form-data" method="post">
                {{ csrf_field() }}

                {{-- Nama --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Nama Headphone: </label>
                    <input type="text" class="form-control" name="nama" value="{{ $listheadphone->name_headphone }}" required>
                </div>
                
                {{-- Nama Brand --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Nama Brand: </label>
                    <select name="brand" class="custom-select">
                        @foreach ($listbrand as $brand)
                            @if ($listheadphone['nama_brand'] == $brand['brand_code'])
                                <option value="{{ $brand['brand_code'] }}" selected>{{ $brand['nama'] }}
                                </option>
                            @else
                                <option value="{{ $brand['brand_code'] }}">{{ $brand['nama'] }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>

                {{-- Tahun --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Tahun: </label>
                    <input type="number" class="form-control" name="tahun" value="{{ $listheadphone->tahun }}" required>
                </div>

                {{-- ANC --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Noise Cancelling </label>
                    <select name="anc" class="custom-select">
                        <option hidden value="{{ $listheadphone->ANC}}">
                            @if ($listheadphone->ANC == 1)
                                Yes
                            @elseif ($listheadphone->ANC == 0)
                                No
                            @endif
                        </option>
                        <option value=1>Yes</option>
                        <option value=0>No</option>
                </div>

                {{-- Tipe --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Tipe: </label>
                    <input type="text" class="form-control" name="tipe" value="{{ $listheadphone->tipe_headphone }}" required>
                </div>

                {{-- Wireless --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Wireless: </label>
                    <input type="text" class="form-control" name="wireless" value="{{ $listheadphone->wireless }}" required>
                </div>

                {{-- Enclosure --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Enclosure: </label>
                    <input type="text" class="form-control" name="enclosure" value="{{ $listheadphone->enclosure }}" required>
                </div>

                {{-- Rating --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Rating: </label>
                    <input type="number" class="form-control" name="rating" value="{{ $listheadphone->rating }}" required>
                </div>

                {{-- Mic --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Mic </label>
                    <select name="mic" class="custom-select">
                        <option hidden value="{{ $listheadphone->mic}}">
                            @if ($listheadphone->mic == 1)
                                Yes
                            @elseif ($listheadphone->mic == 0)
                                No
                            @endif
                        </option>
                        <option value=1>Yes</option>
                        <option value=0>No</option>
                </div>

                {{-- Harga --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Harga: </label>
                    <input type="number" class="form-control" name="harga" value="{{ $listheadphone->harga }}" required>
                </div>

                {{-- Rating --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Rating: </label>
                    <input type="number" class="form-control" name="rating" value="{{ $listheadphone->rating }}" required>
                </div>

                {{-- Image --}}
                <input type="hidden" name="_method" value="PATCH">
                <div class="form-group">
                    <label>Image: </label>
                    <input type="file" name="img_path" accept="image/*"><br><br>
                </div>
                
                <br>
                <div class="text-center">
                    <button type="submit" class="btn btn-success">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection