<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use yajra\Datatables\Datatables;
use Illuminate\Http\Request;

class DatatablesController extends Controller {

	  public function getIndex()
    {
        return view('pages.index');
    }

    /**
     * Process datatables ajax request.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function anyData()
    {
        return Datatables::of(User::select('*'))->make(true);
    }

}
