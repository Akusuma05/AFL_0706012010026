@extends('layout.mainlayout')

{{-- Title --}}
@section('title')
    <title>{{ $title }}</title>
@endsection

{{-- Footer --}}
@section('footer')
    @include ('layout.footer')
@endsection

{{-- Main --}}
@section('main_content')
    @foreach ($listheadphone as $headphone)
        <br>
        {{-- Gambar Headphone & Nama Headphone --}}
        <h1 class="display-1">{{ $headphone['name_headphone'] }}</h1>
        <h3 class="h4">{{ $headphone->getbrand->nama }}</h3>
        <img class="card-img-top" src="{{ url($headphone['image_path_headphone']) }}" alt="Card image"
            style="height:100%">

        {{-- Tabel Headphone --}}
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Year</th>
                    <th scope="col">Type</th>
                    <th scope="col">Enclosure</th>
                    <th scope="col">Noise Cancelling</th>
                    <th scope="col">Wireless</th>
                    <th scope="col">Mic</th>
                    <th scope="col">Rating</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $headphone['tahun'] }}</td>
                    <td>{{ $headphone['tipe_headphone'] }}</td>
                    <td>{{ $headphone['enclosure'] }}</td>
                    <td>
                        @if ($headphone['ANC'] == 1)
                            Yes
                        @elseif($headphone['ANC'] == 0)
                            No
                        @endif
                    </td>
                    <td>{{ $headphone['wireless'] }}</td>
                    <td>
                        @if ($headphone['mic'] == 1)
                            Yes
                        @elseif($headphone['mic'] == 0)
                            No
                        @endif
                    </td>
                    <td>{{ $headphone['rating'] }}</td>
                    <td>{{ $headphone['harga'] }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
    <br>
    <br>
    <br>
@endsection
