<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;
class siswacontroller extends Controller
{
	//
	public function percobaan9()
    {
    	$siswa = siswa::all();
    	return view('siswa',compact('a'));
    }

    public function show($siswa)
    {
    	$siswa = siswa::find($siswa);
    	return $siswa;
    }
}
