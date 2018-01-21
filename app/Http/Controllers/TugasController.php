<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TugasModel;
class TugasController extends Controller
{
    public function barang()
    {
    	$a = TugasModel::all();
    	return $a;
    }
    public function template()
    {
    $a=TugasModel::all();
	return view('table1', compact('a'));
    }
    public function template1()
    {
        return view('layout.galleri');
    }
    public function table()
    {
    $a=TugasModel::all();
    return view('table', compact('a'));
    }
    public function template3()
    {
        return view('layout.paragrap');
    }
    public function template4()
    {
        return view('layout.custom');
    }
    public function template5()
    {
        return view('layout.custom1');
    }
}
