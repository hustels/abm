<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Report;
//use Illuminate\Http\Request;
use App\Http\Requests\StoreReportRequest;
use Request;
use App\Http;
use Illuminate\Http\Request as Peticion;
use yajra\Datatables\Datatables;
use App\Events\UserCreateReport;
use Auth;
class mainController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function home(Peticion $request)
	{
		$usuario_autenticado = $request->user();
		//$graph_data = Report::all(); 
		$graph_data = Report::find(1);
		$reports = \DB::table('reports')
                ->orderBy('created_at', 'desc')
                ->get();
         //$report = $graph_data->lists('created_at');
       
       
		//return  view('pages.home' , compact('usuario_autenticado' , 'data' , 'reports' ,'report') );
        return view('pages.home' , compact('reports'))->with('dates' , $graph_data->lists('created_at'));
		
	}
	public function index() //  el method se llamaba getIndex
    {
    	
    	// Crear un event and pass data to UserCreateReport event
		
		
        return view('pages.index');
        
    }

    /**
     * Procesar peticion ajax de Datatables
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(Report::select('*'))->make(true);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//flash('Hello world' , 'Lo que sea');
		
		return view('pages.create');
		
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Requests\StoreReportRequest $request)//StoreReportRequest $request
	{
		
		if(Report::create($request->all())){
			//return redirect('pages.home');
			$data  = $request->all();
    	
		event (new UserCreateReport($data));
		//return Request::all();
		flash('Usuario guardado correctamente');

		return redirect()->back();// es temporal

		//return view('pages.home' , compact('reports' , 'data'));
		}
		
		 
		

	

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$report = Report::findOrFail($id);
		//dd($report->created_at->addDays(0.5)->diffForHumans());
		dd($report->created_at->date());
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
