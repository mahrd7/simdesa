<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Aparat;
use Carbon\Carbon;
use Excel;
use PDF;

class AparatController extends Controller
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
		$aparats = Aparat::all();
		return view('aparat.index', compact('aparats'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('aparat.create');
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

		Aparat::create($request->all());
		flash()->success('Data aparat telah disimpan!');
		return redirect('/aparat');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('aparat.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$aparat = Aparat::findOrFail($id);
		return view('aparat.edit', compact('aparat'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$aparat = Aparat::findOrFail($id);
		$aparat->update($request->all());

		flash()->info('aparat telah diperbarui!');
		
		return redirect('/aparat');
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
		Excel::create(Carbon::now().' - data induk aparat', function ($excel)
		{
			$excel->setTitle('Data Induk aparat');
    			$excel->sheet('First sheet', function($sheet) {
				$titles = array(
					'No. Registrasi',
					'Nama Lengkap'
				);
				$aparat = Aparat::all();
				$sheet->fromModel($aparat, null, 'A1', true);

			});

		})->download('xls');
	}
}
