<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Models\Headphone;
use Illuminate\Support\Facades\File;

class HeadphoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listheadphone = Headphone::all();
        return view('headphone_page',[
            "title"=> "Headphone"
        ], compact('listheadphone'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $listbrand = Brand::all();
        return view('create_headphone_page',[
            'title'=>'Headphone'
        ],compact('listbrand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('img_path')) {
            $img_ext = $request->file('img_path')->getClientOriginalExtension();
            $filename = '/gambar/headphone/'.time().".".$img_ext;
            $request->file('img_path')->move(public_path('/gambar/headphone/'), $filename);
        }
            
        Headphone::create([
            'name_headphone' => $request->nama,
            'nama_brand' => $request->brand,
            'tahun' => $request->tahun,
            'ANC' => $request->anc,
            'tipe_headphone' => $request->tipe,
            'wireless' => $request->wireless,
            'enclosure' => $request->enclosure,
            'mic' => $request->mic,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'image_path_headphone' => $filename,
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
    public function show($id)
    {
        $listheadphone = Headphone::where('id', $id)
            ->orderBy('id')
            ->get();
        return view('show_headphone_page',[
            'title' => 'Headphone'
        ], compact('listheadphone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listheadphone = Headphone::findOrFail($id);
        $listbrand = Brand::all();
        return view('edit_headphone_page',[
            'title' => 'Headphone'
        ], compact('listheadphone', 'listbrand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $listheadphone = Headphone::findOrFail($id);

        if($request->hasFile('img_path')) {
            File::delete(public_path($listheadphone['image_path_headphone']));
            $img_ext = $request->file('img_path')->getClientOriginalExtension();
            $filename = '/gambar/headphone/'.time().".".$img_ext;
            $request->file('img_path')->move(public_path('/gambar/headphone/'), $filename);
        }
        
        $listheadphone->update([
            'name_headphone' => $request->nama,
            'nama_brand' => $request->brand,
            'tahun' => $request->tahun,
            'ANC' => $request->anc,
            'tipe_headphone' => $request->tipe,
            'wireless' => $request->wireless,
            'enclosure' => $request->enclosure,
            'mic' => $request->mic,
            'harga' => $request->harga,
            'rating' => $request->rating,
            'image_path_headphone' => $filename
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
        $listheadphone = Headphone::findOrFail($id);
        File::delete(public_path($listheadphone['image_path_headphone']));
        $listheadphone->delete();
        return redirect(route('brand.index'));
    }
}
