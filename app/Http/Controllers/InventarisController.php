<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Inventaris;
use Carbon\Carbon;
use Excel;
use PDF;

class InventarisController extends Controller
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
		$inventaris = Inventaris::all();
		return view('inventaris.index', compact('inventaris'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('inventaris.create');
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

		Inventaris::create($request->all());
		flash()->success('Data inventaris telah disimpan!');
		return redirect('/inventaris');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return view('inventaris.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$inventaris = Inventaris::findOrFail($id);
		return view('inventaris.edit', compact('inventaris'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$inventaris = Inventaris::findOrFail($id);
		$inventaris->update($request->all());

		flash()->info('inventaris telah diperbarui!');
		
		return redirect('/inventaris');
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
		Excel::create(Carbon::now().' - data induk inventaris', function ($excel)
		{
			$excel->setTitle('Data Induk inventaris');
    			$excel->sheet('First sheet', function($sheet) {
				$titles = array(
					'No. Registrasi',
					'Nama Lengkap'
				);
				$inventaris = Inventaris::all();
				$sheet->fromModel($inventaris, null, 'A1', true);

			});

		})->download('xls');
	}
}
