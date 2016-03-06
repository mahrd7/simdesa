<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Penduduk;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
    public function index(){
        $count = [
            'penduduk' => Penduduk::count(),
            'keluarga' => Penduduk::where('hubungan', '=', 'KEPALA KELUARGA')->count(),
            'laki_laki' => Penduduk::where('jk', '=', 'L')->count(),
            'perempuan' => Penduduk::where('jk', '=', 'P')->count(),

        ];

    	return view('admin.dashboard', compact('count'));
    }
}
