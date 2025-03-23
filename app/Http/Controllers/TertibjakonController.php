<?php

namespace App\Http\Controllers;

use App\Models\statustertibjakon;
use App\Models\tertibjakon;
use Illuminate\Http\Request;

class TertibjakonController extends Controller
{
    //
    public function fetertibjakon()
    {
        $data_tertibjakon = tertibjakon::paginate(10); // Menggunakan paginate() untuk pagination
        $data_total = tertibjakon::count(); // Menggunakan paginate() untuk pagination
        $data_statustertibjakon = statustertibjakon::all(); // Menggunakan paginate() untuk pagination
        
        return view('frontend.06_3_bloratertibjakon.index', [
            'title' => 'Tertib Jasa Konstruksi',
            'data' => $data_tertibjakon, // Mengirimkan data paginasi ke view
            'data_statustertibjakon' => $data_statustertibjakon, // Mengirimkan data paginasi ke view
            'totaldata' => $data_total, // Mengirimkan data paginasi ke view
        ]);
    }
    

}
