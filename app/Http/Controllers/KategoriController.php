<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use DB;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    $data = Kategori::all();
        return view('pageKategori.index', compact('data'));
    }
	
	public function search(Request $request)
    {
        $query = $request->input('key');
        $hasil = Kategori::where('kategori', 'LIKE', '%' . $query . '%')->paginate(10);
        return view('pageKategori.kategoriHasil', compact('hasil', 'query'));
    }
	
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       DB::table('kategori')->insert([
		'id_kategori' => $request->id_kategori,
		'kategori' => $request->kategori,
		'slug' => $request->slug
	  ]);
	  
		return redirect('kategori');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
		$data = DB::table('kategori')->where('id_kategori',$id)->get();
		return view('pageKategori.editkategori', compact('data'));
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
       DB::table('kategori')->where('id_kategori',$id)->update([
		'kategori' => $request->kategori,
		'slug' => $request->slug
		]);		
		return redirect('kategori');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('kategori')->where('id_kategori',$id)->delete();
		return redirect('kategori');
    }
}
