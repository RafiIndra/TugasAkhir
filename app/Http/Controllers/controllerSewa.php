<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;

class controllerSewa extends Controller
{
    //
    public function form(Request $request)
    {
        //dd($request->all());

        $no = $request->no;
        $merk = $request->merk;
        $tipe = $request->tipe;
        $jenis = $request->jenis;

        return view('formSewa')->with('no', $no)->with('merk', $merk)->with('tipe', $tipe)->with('jenis', $jenis);
    }

    public function invoice(Request $request)
    {
        $nama = $request->nama;
        $NIK = $request->NIK;
        $durasi = $request->durasi;
        $alamat = $request->alamat;
        $no = $request->no;
        $merk = $request->merk;
        $tipe = $request->tipe;
        $jenis = $request->jenis;

        $transaksi = new transaksi;
        $transaksi->no_polisi_motor = $no;
        $transaksi->id_pelanggan = $nama;
        $transaksi->durasi = $durasi;
        $transaksi->save();

        return view('invoice')->with('nama', $nama)->with('NIK', $NIK)->with('durasi', $durasi)->with('alamat', $alamat)->with('no', $no)->with('merk', $merk)->with('tipe', $tipe)->with('jenis', $jenis)->with('transaksi', $transaksi);
    }
}
