<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function coming_soon()
    {
        return view('coming-soon');
    }
    public function datatables(){
        $data_records = DB::table('datatable_emp')->get();
        $data_records = json_decode(json_encode($data_records));
        return view('datatables')->with(compact('data_records'));
    }
    public function getColumnViews(Request $request){
        $user = 'amit';
        $data_columns = DB::table('datatable_columns')->where(['user' => $user])->first();
        echo json_encode($data_columns); die;
    }
    public function updateColumnViews(Request $request){
        if($request->method('ajax')){
            $data = $request->all();
            $user = "amit";
            $data_columns = DB::table('datatable_columns')->where(['user' => $user])->update([$data['column'] => $data['view']]);
            echo "success";
        }
    }
}
