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
        $no = $request->no;
        $merk = $request->merk;
        $tipe = $request->tipe;
        $jenis = $request->jenis;
        $harga = $request->harga;
        $motor = $request->motor;

        return view('formSewa')
        ->with('no', $no)
        ->with('merk', $merk)
        ->with('tipe', $tipe)
        ->with('jenis', $jenis)
        ->with('harga', $harga)
        ->with('motor', $motor);
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
        $transaksi->id_pelanggan = $NIK;
        $transaksi->durasi = $durasi;
        $transaksi->total_harga = $total;
        $transaksi->status_transaksi = 0;
        $transaksi->save();

        Motor::where('No_Polisi', $no)->update(['available' => 0]);

        return view('invoice')
        ->with('nama', $nama)
        ->with('NIK', $NIK)
        ->with('durasi', $durasi)
        ->with('alamat', $alamat)
        ->with('no', $no)
        ->with('merk', $merk)
        ->with('tipe', $tipe)
        ->with('jenis', $jenis)
        ->with('transaksi', $transaksi)
        ->with('harga', $harga);
    }

    public function editMotor(Request $request) {
        $no = $request->no;
        $merk = $request->merk;
        $tipe = $request->tipe;
        $jenis = $request->jenis;
        $harga = $request->harga;
        $available = $request->available;
        $motor = $request->motor;

        return view('editMotor')
        ->with('no', $no)
        ->with('merk', $merk)
        ->with('tipe', $tipe)
        ->with('jenis', $jenis)
        ->with('harga', $harga)
        ->with('available', $available)
        ->with('motor', $motor);
        /*tes*/
        /*halo*/
    }
}