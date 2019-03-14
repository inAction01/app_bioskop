<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use DB;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$kategori = DB::select('select * from kategori order by id_kategori asc');
        $data = DB::select('select a.*,b.kategori from film a join kategori b on a.id_kategori = b.id_kategori order by a.id_kategori asc');
        return view('pageFilm.index', compact('data','kategori'));
    }
	
	public function search(Request $request)
    {
        $query = $request->input('key');
        $hasil = Film::where('judul', 'LIKE', '%' . $query . '%')->paginate();
        return view('pageFilm.FilmHasil', compact('hasil', 'query'));
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
       $id = 'ID-'.substr(strtoupper($request->id_kategori),3,3).'-'.date('his');
       DB::table('film')->insert([
		'id_film' => $id,
		'id_kategori' => $request->id_kategori,
		'judul' => $request->judul,
		'sutradara' => $request->sutradara,
		'thn_rilis' => $request->thn_rilis,
		'sinopsis' => $request->sinopsis
	  ]);
	  
		return redirect('film');
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
		$kategori = DB::select('select * from kategori order by id_kategori asc');
        $data = DB::select('select * from film where id_film =?', [$id]);
		return view('pageFilm.editFilm', compact('data','kategori'));
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
        DB::table('film')->where('id_film',$id)->update([
		'id_kategori' => $request->id_kategori,
		'judul' => $request->judul,
		'sutradara' => $request->sutradara,
		'thn_rilis' => $request->thn_rilis,
		'sinopsis' => $request->sinopsis
		]);		
		return redirect('film');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('film')->where('id_film',$id)->delete();
		return redirect('film');
    }
}
