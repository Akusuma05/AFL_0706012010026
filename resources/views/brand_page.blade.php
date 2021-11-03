@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>

@section('main_content')
<br>
<a class="btn btn-info" href="{{ route('brand.create')}}">Create Brand</a>

  <div class="row row-cols-4 row-cols-md-4 g-4">

    @foreach ($listbrand as $brand)

      <div class="col">
        <div class="card text-center" style="width:100%">
            <a href="{{ route('brand.show',$brand->brand_code)}}">
          <img class="card-img-top" src="{{url($brand['image_path_brand'])}}" alt="Card image" style="height:200px">
            </a>
          <div class="card-body">
            <h4 class="card-title">{{ $brand['nama'] }}</h4>
            <form action="{{ route('brand.destroy',$brand->brand_code)}}" method="POST">
                <a class="btn btn-info" href="{{ route('brand.show',$brand->brand_code)}}">Show</a>
                <a class="btn btn-primary" href="{{ route('brand.edit',$brand->brand_code)}}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
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