@extends('layout.mainlayout')

@section('title')
<title>{{$title}}</title>
@endsection

@section('main_content')

        @foreach ($listbrand as $brand)
            <br>
            <br>
            <img class="card-img-top" src="{{url($brand['image_path_brand'])}}" alt="Card image" style="height:400px">
            <br>
            <h1>{{$brand['nama']}}</h1>
            <p>{{$brand['asal']}}</p>
            <a class="btn btn-info" href="{{ route('headphone.create')}}">Create Headphone</a>
            
        @endforeach
        
        
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Headphone</th>
                <th scope="col">Brand</th>
                <th scope="col">Tahun</th>
                <th scope="col">Rating</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php $index = 1 @endphp
            @foreach ($brand->getheadphone as $headphone)
                <tr>
                    <th scope="row">{{$index}}</th>
                    @php $index++ @endphp
                    <td>{{$headphone['name_headphone']}}</td>
                    <td>{{$headphone->getbrand->nama}}</td>
                    <td>{{$headphone['tahun']}}</td>
                    <td>{{$headphone['rating']}}</td>
                    <td>
                        <form action="{{ route('headphone.destroy',$headphone->id)}}" method="POST">
                            <a class="btn btn-info" href="{{ route('headphone.show',$headphone->id)}}">Show</a>
                            <a class="btn btn-primary" href="{{ route('headphone.edit',$headphone->id)}}">Edit</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection