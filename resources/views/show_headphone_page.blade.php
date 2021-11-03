@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>
@endsection

@section('main_content')
        @foreach ($listheadphone as $headphone)
            <br>
            <h1>{{$headphone['name_headphone']}}</h1>
            <h3>{{$headphone->getbrand->nama}}</h3>
            <img class="card-img-top" src="{{url($headphone['image_path_headphone'])}}" alt="Card image" style="height:100%">
            
            <p>
                <b>Year  </b>{{$headphone['tahun']}}&nbsp&nbsp
                <b>  Type  </b>{{$headphone['tipe_headphone']}}&nbsp&nbsp
                <b>  Enclosure  </b>{{$headphone['enclosure']}}&nbsp&nbsp
                <b>  Noise Cancelling  </b> 
                @if ($headphone['ANC'] == 1)
                    Yes &nbsp&nbsp
                @elseif($headphone['ANC'] == 0)
                    No &nbsp&nbsp
                @endif
                <b>  Wireless  </b>{{$headphone['wireless']}}
            </p>
            <p>
                <b>Mic  </b>
                @if ($headphone['mic'] == 1)
                    Yes &nbsp&nbsp
                @elseif($headphone['mic'] == 0)
                    No &nbsp&nbsp
                @endif
                <b>  Rating  </b>{{$headphone['rating']}}&nbsp&nbsp
                <b>  Harga  </b>Rp.{{$headphone['harga']}}&nbsp&nbsp
            </p>
        @endforeach
    <br>
    <br>
    <br>
@endsection