<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Peraturan;
use Carbon\Carbon;
use Excel;
use PDF;

class PeraturanController extends Controller
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
		$peraturans = Peraturan::all();
		return view('peraturan.index', compact('peraturans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('peraturan.create');
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

		Peraturan::create($request->all());
		flash()->success('Data peraturan telah disimpan!');
		return redirect('/peraturan');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('peraturan.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$peraturan = Peraturan::findOrFail($id);
		return view('peraturan.edit', compact('peraturan'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$peraturan = Peraturan::findOrFail($id);
		$peraturan->update($request->all());

		flash()->info('peraturan telah diperbarui!');
		
		return redirect('/peraturan');
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
		Excel::create(Carbon::now().' - data induk peraturan', function ($excel)
		{
			$excel->setTitle('Data Induk peraturan');
    			$excel->sheet('First sheet', function($sheet) {
				$titles = array(
					'No. Registrasi',
					'Nama Lengkap'
				);
				$peraturan = Peraturan::all();
				$sheet->fromModel($peraturan, null, 'A1', true);

			});

		})->download('xls');
	}
}
