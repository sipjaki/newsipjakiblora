<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\agendapelatihan;
use App\Models\jenjang;
use App\Models\kategoripelatihan;
use App\Models\pembinaan;
use App\Models\pesertapelatihan;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class PesertapelatihanController extends Controller
{

// MENU BACKEND DAFTAR SELURUH PESERTA PELATIHAN

    public function bepesertapelatihan(Request $request)
    {
            $perPage = $request->input('perPage', 5);
            $search = $request->input('search');

            $query = pesertapelatihan::query();

            if ($search) {
                $query->where('nik', 'LIKE', "%{$search}%")
                    ->orWhere('jeniskelamin', 'LIKE', "%{$search}%")
                    ->orWhere('tanggallahir', 'LIKE', "%{$search}%")
                    ->orWhere('notelepon', 'LIKE', "%{$search}%")
                    ->orWhere('instansi', 'LIKE', "%{$search}%")
                    ->orWhere('sertifikat', 'LIKE', "%{$search}%")
                    ->orWhere('verifikasi', 'LIKE', "%{$search}%")
        // -------------------------------------------------------------------------------
                    ->orWhereHas('agendapelatihan', function ($q) use ($search) {
                        $q->where('agendapelatihan', 'LIKE', "%{$search}%");
                    })
                    ->orWhereHas('user', function ($q) use ($search) {
                        $q->where('name', 'LIKE', "%{$search}%");
                    });

            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('backend.05_agenda.02_agendapelatihan.partials.table', compact('data'))->render()
                ]);
            }

            return view('backend.05_agenda.02_pesertapelatihan.index', [
                'title' => 'Daftar Peserta Pelatihan',
                'data' => $data,
                'perPage' => $perPage,
                'search' => $search
            ]);
    }

    // TKK DPUPR BLORA SHOW

    public function bepesertapelatihanshow($name)
    {
        // Cari data peserta berdasarkan nama user
        $datapeserta = pesertapelatihan::whereHas('user', function ($query) use ($name) {
            $query->where('name', $name);
        })->first();

        // Ambil data user yang sedang login
        $user = Auth::user();

        return view('backend.05_agenda.02_pesertapelatihan.show', [
            'title' => 'Data Peserta Pelatihan',
            'data' => $datapeserta,
        ]);
    }


        public function bepesertapelatihandelete($id)
        {
        // Cari item berdasarkan judul
            $entry = pesertapelatihan::where('id', $id)->first();

            if ($entry) {
            // Jika ada file header yang terdaftar, hapus dari storage
            // if (Storage::disk('public')->exists($entry->header)) {
                //     Storage::disk('public')->delete($entry->header);
            // }

            // Hapus entri dari database
            $entry->delete();

            // Redirect atau memberi respons sesuai kebutuhan
            return redirect('/bepesertapelatihan')->with('delete', 'Data Berhasil Di Hapus !');

            }

        return redirect()->back()->with('error', 'Item not found');
        }



}

