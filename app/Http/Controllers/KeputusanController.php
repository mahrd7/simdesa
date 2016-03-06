<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Keputusan;
use Carbon\Carbon;
use Excel;
use PDF;

class KeputusanController extends Controller
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
		$keputusans = Keputusan::all();
		return view('keputusan.index', compact('keputusans'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('keputusan.create');
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

		Keputusan::create($request->all());
		flash()->success('Data keputusan telah disimpan!');
		return redirect('/keputusan');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('keputusan.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$keputusan = Keputusan::findOrFail($id);
		return view('keputusan.edit', compact('keputusan'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$keputusan = Keputusan::findOrFail($id);
		$keputusan->update($request->all());

		flash()->info('keputusan telah diperbarui!');
		
		return redirect('/keputusan');
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
		Excel::create(Carbon::now().' - data induk keputusan', function ($excel)
		{
			$excel->setTitle('Data Induk keputusan');
    			$excel->sheet('First sheet', function($sheet) {
				$titles = array(
					'No. Registrasi',
					'Nama Lengkap'
				);
				$keputusan = Keputusan::all();
				$sheet->fromModel($keputusan, null, 'A1', true);

			});

		})->download('xls');
	}
}
