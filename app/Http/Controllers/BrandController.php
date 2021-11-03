<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;
use App\Models\Headphone;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listbrand = Brand::all();
        return view('brand_page',[
            "title"=> "Brand"
        ], compact('listbrand'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_brand_page',[
            'title'=>'Brand'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $code = Str::upper(Str::substr($request->nama, 0, 3));
        
        if($request->hasFile('img_path')) {
            $img_ext = $request->file('img_path')->getClientOriginalExtension();
            $filename = '/gambar/brand/'.time().".".$img_ext;
            $request->file('img_path')->move(public_path('/gambar/brand/'), $filename);
        }
            
        Brand::create([
            'brand_code' => $code,
            'nama' => $request->nama,
            'asal' => $request->asal,
            'image_path_brand' => $filename,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('brand.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($brand_code)
    {
        $listbrand = Brand::where('brand_code', $brand_code)
            ->orderBy('brand_code')
            ->get();
        return view('show_brand_page',[
            'title'=>'Brand'
        ], compact('listbrand'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($brand_code)
    {
        $listbrand = Brand::where('brand_code', '=', $brand_code)->firstOrFail();
        return view('edit_brand_page',[
            'title' => 'brand'
        ], compact('listbrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $brand_code)
    {
        $listbrand = Brand::where('brand_code', $brand_code);

        $code = Str::upper(Str::substr($request->nama, 0, 3));
        
        if($request->hasFile('img_path')) {
            $img_ext = $request->file('img_path')->getClientOriginalExtension();
            $filename = '/gambar/brand/'.time().".".$img_ext;
            $request->file('img_path')->move(public_path('/gambar/brand/'), $filename);
        }
            
        $listbrand->update([
            'brand_code' => $code,
            'nama' => $request->nama,
            'asal' => $request->asal,
            'image_path_brand' => $filename,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
        return redirect(route('brand.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $listbrand = Brand::findOrFail($id);
        $listheadphone = Headphone::all();
        foreach ($listheadphone as $item){
            if ($item['nama_brand']==$listbrand['brand_code']){
                File::delete(public_path($item['image_path_headphone']));
            }
        }
        File::delete(public_path($listbrand['image_path_brand']));
        $listbrand->delete();
        return redirect(route('brand.index'));
    }
}
