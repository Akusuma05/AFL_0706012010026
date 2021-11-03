@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
<br>

  <div class="row row-cols-3 row-cols-md-3 g-4">

    @foreach ($listheadphone as $headphone)

      <div class="col">
        <div class="card text-center" style="width:100%; height:270px">
            <a href="{{ route('headphone.show',$headphone->id)}}">
          <img class="card-img-top" src="{{url($headphone['image_path_headphone'])}}" alt="Card image" style="height:100%">
            </a>
          <div class="card-body">
            <h5 class="card-title">{{ $headphone['name_headphone'] }}</h5>
          </div>
        </div>
    </div>

    @endforeach
</div>
<br>
<br>
<br>
@endsection