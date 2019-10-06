<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Kategorigaleri;

class GaleriController extends Controller
{
    public function index(){
        $listGaleri=Galeri::all();

        return view ('galeri.index', compact ('listGaleri'));
    }
        
    public function show($id){
        $Galeri=Galeri::find($id);

        return view ('galeri.show',compact('Galeri'));  
    }
    public function create(){

        $kategorigaleri=Kategorigaleri::pluck('nama','id',);
        

        return view('galeri.create', compact('kategorigaleri'));
    }

    public function store(Request $request){
        $input= $request->all();

     Galeri::create($input);
    
        return redirect(route('galeri.index'));
    }
}