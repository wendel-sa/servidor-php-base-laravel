<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book;
use App\Models\verse;


class BibliaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    //funcao post para cadastrar um usuario

    public function BibliaJson()
    {
       //get all books
         $verse = verse::where('book', '=', 65)->get();
        // $this->index();
         dd($verse[0]->toArray());

    }


    public function index()
    {
        $books = book::all();
        $this->capitulos(65);
        return view('biblia.livros', compact('books'));
    }

    public function Versoes()
    {
       // $url = "https://www.abibliadigital.com.br/api/versions";
        $versoes = file_get_contents($url);
        $versoes = json_decode($versoes, true);
        // dd($versoes);
        // $this->capitulos('gn');
        return view('biblia.index', compact('versoes'));
    }

    //função para capitulos

    public function capitulos($book)
    {
        $books = book::all();
       //pegar capitulos
        $cap = verse::where('book', '=', $book)->get();
        //get chapter
        $capitulos = $cap->groupBy('chapter');
        $versiculos = $cap->groupBy('verse');
        //pegar o texto pelo book, capitulo e versiculo
        $texto = verse::where('book', '=', $book)->where('chapter', '=', 5)->get();
            dd($texto->toArray());
        //dd($capitulos->toArray(), $versiculos->toArray());
        //reornar numero de arrays
        $capitulos = $capitulos->count();
      //  dd($capitulos);
        return view('biblia.livros', compact('texto','capitulos', 'books'));
    }

    //função para versiculos

    public function versiculos($versao, $book, $chapter)
    {
       // $url = "https://www.abibliadigital.com.br/api/verses/$versao/$book/$chapter";
        $versiculos = file_get_contents($url);
        $versiculos = json_decode($versiculos, true);
        $this->versiculo('nvi', 'sl', '1', '1');
        return view('biblia.versiculos', compact('versiculos'));
    }

    //função para versiculo especifico

    public function versiculo($versao, $book, $chapter, $verse)
    {
       // $url = "https://www.abibliadigital.com.br/api/verses/$versao/$book/$chapter/$verse";
        $versiculo = file_get_contents($url);
        $versiculo = json_decode($versiculo, true);
        //dd($versiculo);
        return view('biblia.livros', compact('versiculo'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
