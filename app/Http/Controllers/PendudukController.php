<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Penduduk;
use Carbon\Carbon;
use Excel;
use PDF;

class PendudukController extends Controller
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
	public function index()
	{
		$penduduks = Penduduk::all();
		return view('penduduk.index', compact('penduduks'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('penduduk.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$messages = [

		];

		$this->validate($request, [

		], $messages);

		Penduduk::create($request->all());
		flash()->success('Data penduduk telah disimpan!');
		return redirect('/penduduk');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$penduduk = 1;
		return view('penduduk.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$penduduk = Penduduk::findOrFail($id);
		return view('penduduk.edit', compact('penduduk'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$penduduk = Penduduk::findOrFail($id);
		$penduduk->update($request->all());

		flash()->info('Penduduk telah diperbarui!');
		
		return redirect('/penduduk');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

	public function kk()
	{
		$pdf = PDF::loadView('pdf.kk');
		return $pdf->setPaper('a4', 'landscape')->stream();
	}

	public function ktp()
	{
		$pdf = PDF::loadView('pdf.ktp');
		return $pdf->setPaper('a4', 'potrait')->stream();
	}


	public function exportToExcel()
	{
		Excel::create(Carbon::now().' - data induk penduduk', function ($excel)
		{
			$excel->setTitle('Data Induk Penduduk');
    			$excel->sheet('First sheet', function($sheet) {
				$titles = array(
					'No. Registrasi',
					'Nama Lengkap'
				);
				$penduduk = Penduduk::all();
				$sheet->fromModel($penduduk, null, 'A1', true);

			});

		})->download('xls');
	}
}
