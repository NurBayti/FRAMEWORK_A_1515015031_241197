<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
  public function awal()
  {
  	return "Hello dari MahasiswaController";
  }
  public function tambah()
  {
  	return $this->simpan();
  }
  public function simpan()
  {
  	$mahasiswa = new  mahasiswa();
  	$mahasiswa->nama = 'Nur Bayti';
  	$mahasiswa->nim = '1515015031';
  	$mahasiswa->alamat = 'Jl. Pramuka';
  	$mahasiswa->pengguna_id = '2';
  	$mahasiswa->save();
  	return "data dengan mahasiswa {$mahasiswa->nama} telah disimpan";
  }
}
