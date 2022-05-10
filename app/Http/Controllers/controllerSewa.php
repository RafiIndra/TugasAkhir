<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\MotorDipinjam;
use App\Models\Motor;

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
        $harga = $request->harga;
        $motor = $request->motor;

        return view('formSewa')->with('no', $no)->with('merk', $merk)->with('tipe', $tipe)->with('jenis', $jenis)->with('harga', $harga)->with('motor', $motor);
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
        $harga = $request->harga;
        $total = $harga * $durasi;

        $transaksi = new transaksi;
        $transaksi->no_polisi_motor = $no;
        $transaksi->id_pelanggan = $nama;
        $transaksi->durasi = $durasi;
        $transaksi->total_harga = $total;
        $transaksi->save();

        $motor = $request->motor;
        $motordipinjam = new MotorDipinjam;
        $motordipinjam->No_polisi = $no;
        $motordipinjam->Merk = $merk;
        $motordipinjam->Jenis = $jenis;
        $motordipinjam->Tipe = $tipe;
        $motordipinjam->harga_Per_Hari = $harga;
        $motordipinjam->save();

        Motor::where('No_Polisi', $no)->delete();

        return view('invoice')->with('nama', $nama)->with('NIK', $NIK)->with('durasi', $durasi)->with('alamat', $alamat)->with('no', $no)->with('merk', $merk)->with('tipe', $tipe)->with('jenis', $jenis)->with('transaksi', $transaksi)->with('harga', $harga);
    }
}