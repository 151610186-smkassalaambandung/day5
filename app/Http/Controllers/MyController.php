<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function percobaan()
    {
    	// passing data basic
    	$a = "Ez";
    	return "Nama Saya Adalah ".$a;
    }
   // passing data show view
    public function percobaan2()
    {
    	return view('about');
    }
 //passing data variable to view
    public function percobaan3()
    {
    	$a = "Bay";
    	return view('latihan.saya',compact('a'));
    }
        public function percobaan4()
    {
    	$q = "Bay";
    	$w = "XI RPL 2";
    	$e = "SMK Assalaam";
    	return view('latihan.im',compact('q','w','e'));
    }
    public function percobaan5()
    {
    	$a = 1;
    	$b = 2;
    	$c = 3;
    	return view("latihan.seleksi",compact('a','b','c'));
    }
    public function percobaan6()
    {
    	$buah = ['Mangga','Jeruk','Apel','Anggur'];
    	return view('latihan.buah',compact('buah'));
    }
     public function percobaan7()
    {
    	$buah =          ['Mangga','Jeruk','Apel','Anggur'];
    	$kehidupan =     ['Hewan','Manusia','Tumbuhan','Bakteri','Dll'];
    	$komputer =      ['Monitor','Keyboard','Mouse','Speaker','CPU'];
    	return view('latihan.jenis',compact('buah','kehidupan','komputer'));
    }
    //parameter
     public function percobaan8($data,$data2 = null)
    {
        $array = array ('binatang'=>['kucing' => ['persia','anggora'],
                                       'hamster' => ['hamtaro','hamtari'],
                                       'kelinci' => ['anggora','persia']],

                         'buah'=>['mangga' => ['harumanis','marijan'],
                                       'alpukat' => ['hijau','hitam'],
                                       'apel' => ['fuji','hejo']],

                        'komputer'=>['asus' => ['456UR','456'],
                                       'dell' => ['alienware','inspiron'],
                                       'acer' => ['6930','7780']]
                                          );
         if ($data) {
            $query = (array_keys($array[$data]));
         }
         if ($data2){
            $query = ($array[$data][$data2]);
         }
         return view('parameter',compact('query','data','data2'));
    }
    
}
