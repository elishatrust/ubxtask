<?php
namespace App\Http\Controllers;
use App\Models\ProcessBill;
use Illuminate\Http\Request;

class ProcessBillController extends Controller
{
    public function processbill()
    {
        return view('pages.stage-0');
    }
    public function data()
    {
        return view('pages.stage-1');
    }

}
