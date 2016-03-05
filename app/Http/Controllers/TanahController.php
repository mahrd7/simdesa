<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tanah;
use App\Http\Requests;

class TanahController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tanahs = Tanah::all();
		return view('tanah.index', compact('tanahs'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tanah.create');
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

		Tanah::create($request->all());
		flash()->success('Data tanah telah disimpan!');
		return redirect('/tanah');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$tanah = 1;
		return view('tanah.show');
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$tanah = Tanah::findOrFail($id);
		$jk = $tanah->jk;
		return view('tanah.edit', compact('tanah', 'jk'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$tanah = Tanah::findOrFail($id);
		$tanah->update($request->all());

		flash()->info('tanah telah diperbarui!');
		
		return redirect('/tanah');
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

	public function pdf()
	{
		$pdf = PDF::loadView('partials.info');
		return $pdf->stream();
	}
	
	public function exportToExcel()
	{
		Excel::create(Carbon::now().' - data induk pendaftar', function ($excel)
		{
			$excel->setTitle('Data Induk Pendaftar');
    			$excel->sheet('First sheet', function($sheet) {
				$titles = array(
					'No. Registrasi',
					'Nama Lengkap'
				);
				$tanah = tanah::all();
				$sheet->fromModel($tanah, null, 'A1', true);

			});

		})->download('xlsx');
	}
}
