<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Dosen;

class DosenController extends Controller
{
      public function awal()
  {
  	return "Hello dari DosenController";
  }
  public function tambah()
  {
  	return $this->simpan();
  }
  public function simpan()
  {
  	$dosen = new  dosen();
  	$dosen->nama = 'Hasyim Asyari';
  	$dosen->nip = '75789437';
  	$dosen->alamat = 'Jl. Pramuka';
  	$dosen->pengguna_id = '1';
  	$dosen->save();
  	return "data dengan dosen {$dosen->nama} telah disimpan";
  }
}
