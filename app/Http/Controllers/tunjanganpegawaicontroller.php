<?php

namespace App\Http\Controllers;

use Request;
use App\Tunjangan_pegawai;
use App\Tunjangan;
use App\Pegawai;
use App\User;
use Validator;


class tunjanganpegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $tp = tunjangan_pegawai::paginate(5);
        $tun = tunjangan::all();
        $user = User::all();
        //dd($tp);
        return view('tunjangan_pegawai.index',compact('tp','tun','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $peg = pegawai::all();
        $tun = tunjangan::all();
        return view('tunjangan_pegawai.create', compact('peg','tun'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $tp = array (
            'kode_tunjangan_id' => 'required',
            'pegawai_id'=>'required',
            );
        $pesan = array(
            'kode_tunjangan_id.required' =>'Harus Diisi broo',
            'pegawai_id.required' =>'Harus Diisi broo',
            );

        $validation = Validator::make(Request::all(), $tp, $pesan);

        if($validation->fails())
        {
            return redirect('tunjangan_pegawai/create')->withErrors($validation)->withInput();
        }

        $tunjangan_pegawai = Request::all();
        // dd($tunjangan_pegawai);
        $pegawai = Pegawai::where('id', $tunjangan_pegawai['pegawai_id'])->first();

        $check = Tunjangan::where('jabatan_id', $pegawai->jabatan_id)->where('golongan_id', $pegawai->golongan_id)->first();

        if(!isset ($check->id))
        {
            $peg = pegawai::all();
            $tun = tunjangan::all();
            $error = true;
        return view('tunjangan_pegawai.create', compact('peg','tun','error'));
        }
        
        $tunjangan_pegawai['kode_tunjangan_id'] = $check->id;

        Tunjangan_pegawai::create($tunjangan_pegawai);

        return redirect('tunjangan_pegawai');
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
        //
        $tp = tunjangan_pegawai::find($id);
        $tun = tunjangan::all();
        $peg = pegawai::all();
        return view('tunjangan_pegawai.edit', compact('tp','tun','peg'));
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
        //
        $tp = Request::all();
        $tun_peg = tunjangan_pegawai::find($id);
        $tun_peg->update($tp);
        return redirect('tunjangan_pegawai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        tunjangan_pegawai::find($id)->delete();
        return redirect('tunjangan_pegawai');
    }
}
