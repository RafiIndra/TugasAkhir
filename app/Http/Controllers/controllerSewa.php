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
        $transaksi->nama_pelanggan = $nama;
        $transaksi->alamat_pelanggan = $alamat;
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
        $id = $request->id;
        $no = $request->no;
        $merk = $request->merk;
        $tipe = $request->tipe;
        $jenis = $request->jenis;
        $harga = $request->harga;
        $available = $request->available;
        $motor = $request->motor;

        return view('editMotor')
        ->with('id', $id)
        ->with('no', $no)
        ->with('merk', $merk)
        ->with('tipe', $tipe)
        ->with('jenis', $jenis)
        ->with('harga', $harga)
        ->with('available', $available)
        ->with('motor', $motor);
    }

    public function simpanEditMotor(Request $request) {
        Motor::where('id', $request->id)->update(['No_Polisi' => $request->no]);
        Motor::where('id', $request->id)->update(['Merk' => $request->merk]);
        Motor::where('id', $request->id)->update(['Tipe' => $request->tipe]);
        Motor::where('id', $request->id)->update(['Jenis' => $request->jenis]);
        Motor::where('id', $request->id)->update(['harga_Per_Hari' => $request->harga]);
        Motor::where('id', $request->id)->update(['available' => $request->available]);

        return redirect()->route('index.admin');
    }

    public function simpanAddMotor(Request $request) {
        $motor = new Motor;
        $motor->No_Polisi = $request->no;
        $motor->Tipe = $request->tipe;
        $motor->Merk = $request->merk;
        $motor->Jenis = $request->jenis;
        $motor->harga_Per_Hari = $request->harga;
        $motor->available = $request->available;
        $motor->save();

        return redirect()->route('index.admin');
    }

    public function addMotor() {
        return view('simpanAddMotor');
    }

    public function editTransaksi(Request $request) {

        $id = $request->id;
        $status = $request->status;
        $no = $request->no;

        return view('editTransaksi')
        ->with('id', $id)
        ->with('status', $status)
        ->with('no', $no);
    }

    public function simpanEditTransaksi(Request $request) {
        Transaksi::where('id_transaksi', $request->id)->update(['status_transaksi' => $request->status]);
        Motor::where('No_Polisi', $request->no)->update(['available' => 1]);

        return redirect()->route('index.admin');
    }

    public function deleteTransaksi(Request $request) {
        $transaksi = Transaksi::where('id_transaksi', $request->id)->delete();

        return redirect()->route('index.admin');
    }

    public function deleteMotor(Request $request) {
        $motor = Motor::where('id', $request->id)->delete();
        
        return redirect()->route('index.admin');
    }
}