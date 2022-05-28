<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Data;

class DataImportController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('user-import');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store()
    {
        Excel::import(new UsersImport, request()->file('file'));

        return back()->with('success', 'File has been uploaded Successfully.');
    }

    public function get_data()
    {
        $data = Data::all();
        return view('index',['data'=>$data]);
    }
}
