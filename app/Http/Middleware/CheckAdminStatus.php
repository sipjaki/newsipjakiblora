<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class CheckAdminStatus
{
    public function handle(Request $request, Closure $next, $status)
    {
        // Cek status admin yang ingin diakses
        if ($status === 'super_admin' && !Gate::allows('super_admin')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'admin' && !Gate::allows('admin')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'pekerja' && !Gate::allows('pekerja')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'supp_pabrik' && !Gate::allows('supp_pabrik')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'supp_peralatan' && !Gate::allows('supp_peralatan')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'supp_tokobangunan' && !Gate::allows('supp_tokobangunan')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'lsppenerbit' && !Gate::allows('lsppenerbit')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'operator' && !Gate::allows('operator')) {
            abort(403, 'Unauthorized action.');
        }

        if ($status === 'dinas' && !Gate::allows('dinas')) {
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}
