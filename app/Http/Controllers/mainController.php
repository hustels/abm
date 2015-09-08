<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;
//use Illuminate\Http\Request;
use App\Http\Requests\StoreReportRequest;
use Request;

class mainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function home()
	{
		return  view('pages.home');
	}
	public function index()
	{
		$this->middleware('auth');
		// Extraer todos reports de BD y pasarlo a la vista
		$reports =Report::latest()->get(); // Ordenar por el ultimo
		return view('pages.index'  , compact('reports'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('pages.create');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StoreReportRequest $request)//StoreReportRequest $request
	{
		Report::create($request->all());
		//return redirect('pages.home');
		return Request::all();
	

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$report = Report::find($id);
		if($report){
			// Si hay report con ese id
			return $report;
		}else {
			return 'No report founded';
		}
		
	}

}
