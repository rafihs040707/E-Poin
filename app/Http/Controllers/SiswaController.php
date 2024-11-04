<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SiswaController extends Controller
{
    //get Data db
    $siswas = DB::table('siswas')
        ->join('user', 'siswaas.id_user', '=', 'user.id')
        ->select(
            'siswas.*',
            'user.name',
            'user.email'
        )
        ->paginate(10);

    return view('admin.siswa.index', compact('siswas'))
}
