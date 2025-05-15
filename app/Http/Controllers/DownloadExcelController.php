<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use Illuminate\Http\Request;

class DownloadExcelController extends Controller
{
    //

    public function exportasosiasi()
{
    $data = asosiasimasjaki::all(); // Ambil semua data TANPA paginasi

    $filename = "data_asosiasi.csv";
    $headers = [
        'Content-Type' => 'text/csv',
        'Content-Disposition' => "attachment; filename=$filename",
    ];

    $callback = function () use ($data) {
        $file = fopen('php://output', 'w');
        // Judul kolom
        fputcsv($file, ['No', 'Nama Asosiasi', 'Alamat', 'Telepon', 'PIC', 'Jumlah Anggota']);

        foreach ($data as $i => $row) {
            fputcsv($file, [
                $i + 1,
                $row->namaasosiasi ?: 'Data Belum Di Update',
                $row->alamat ?: 'Data Belum Di Update',
                $row->notelepon ?: 'Data Belum Di Update',
                $row->pic ?: 'Data Belum Di Update',
                $row->jumlahanggota ?: 'Data Belum Di Update',
            ]);
        }
        fclose($file);
    };

    return response()->stream($callback, 200, $headers);
}

}
