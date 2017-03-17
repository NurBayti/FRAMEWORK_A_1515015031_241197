<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Matakuliah;

class MatakuliahController extends Controller
{
    public function awal()
  {
  	return "Hello dari MatakuliahController";
  }
  public function tambah()
  {
  	return $this->simpan();
  }
  public function simpan()
  {
  	$matakuliah = new  matakuliah();
  	$matakuliah->title = 'Pemograman Framework';
  	$matakuliah->keterangan = '2 sks';
  	$matakuliah->save();
  	return "data dengan matakuliah {$matakuliah->title} telah disimpan";
  }
}
