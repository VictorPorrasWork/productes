<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producte;

class ProducteController extends Controller
{
    public function index()
    {
        $productes = Producte::paginate(5);
        return view('productes.index', compact('productes'));
    }

    public function create()
    {
        return view('productes.create');
    }
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'nom_categoria' => 'required | min:2 | max:50',
            'descripcio_categoria' => 'required | min:5 | max:200',
            'quantitat' => 'required|integer|min:1' 
        ]);
        $productes = new Producte;
        $productes -> nom_categoria = $request -> nom_categoria;
        $productes -> descripcio_categoria = $request -> descripcio_categoria;
        $productes -> quantitat = $request -> quantitat;
        $productes -> save();
        return redirect()->route('productes.index')->with('success','Producte creat correctament.');
    }

    public function edit(Producte $producte)
    {
        return view('productes.edit', compact('producte'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producte $producte)
    {
        $request -> validate([
            'nom_categoria' => 'required | min:2 | max:50',
            'descripcio_categoria' => 'required | min:5 | max:200',
            'quantitat' => 'required|integer|min:1' 
        ]);
        $productes = new Producte;
        $productes -> nom_categoria = $request -> nom_categoria;
        $productes -> descripcio_categoria = $request -> descripcio_categoria;
        $productes -> quantitat = $request -> quantitat;
        $productes -> save();
        return redirect()->route('productes.index')->with('success','Producte actualitzat correctament.');
    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Producte $producte)
    {
        try {
            $result = $producte->delete();
        } catch(\Illuminate\Database\QueryException $e) {
            return redirect()->route('productes.index')->with('error','Error esborrant el producte.');
        }
        return redirect()->route('productes.index')->with('success','Producte esborrat correctament.');
    }
    
}
