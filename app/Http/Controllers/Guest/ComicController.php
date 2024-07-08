<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comicsList = Comic::all();
        $data = [
            "list" => $comicsList
        ];
        return view("comics.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("comics.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //CON VALIDATE E FILL DALLA CLASSE COMIC
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "path_img" => "required",
            "price" => "required",
            "sale_date" => "required",
        ]);

        //CREO UN NEW COMIC
        $newComic = new Comic();
        //FACCIO IL FILL DI COMIC CHE HA TUTTE LE PROPRIETà E LE PASSO A NEW COMIC
        $newComic->fill($data);
        //SALVO SUL DATABASE I DATI DI NEWCOMIC
        $newComic->save();
        return redirect()->route('comics.show', $newComic);


        // //recupero i dati passati dal form e li salvo in una variabile
        // $comic = $request->all();

        // //creo un nuovo comic da passare al database tramite i dati che mi arrivano dal form in create.blade.php
        // $newComic = new Comic();
        // $newComic->title = $comic['title'];
        // $newComic->description = $comic['description'];
        // $newComic->path_img = $comic['path_img'];
        // $newComic->price = $comic['price'];
        // $newComic->sale_date = $comic['sale_date'];
        // //salvo il dato del form nel database
        // $newComic->save();
        // return redirect()->route('comics.show', $newComic->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $comicsList = Comic::find($id);
        $data = [
            "list" => $comicsList
        ];
        return view("comics.show", $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        $data = [
            "comic" => $comic
        ];
        return view("comics.edit", $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        //CON UPDATE E VALIDATE DALLA CLASSE COMIC METTO IL REQUEST DENTRO LA VARIABILE DATA
        $data = $request->validate([
            "title" => "required",
            "description" => "required",
            "path_img" => "required",
            "price" => "required",
            "sale_date" => "required",
        ]);

        $comic->update($data);
        return redirect()->route('comics.show', $comic);




        //SENZA FILL E VALIDATE
        // $data = $request->all();

        // $comic->title = $data['title'];
        // $comic->description = $data['description'];
        // $comic->path_img = $data['path_img'];
        // $comic->price = $data['price'];
        // $comic->sale_date = $data['sale_date'];
        // //salvo il dato del form nel database
        // $comic->save();
        // return redirect()->route('comics.show', $comic->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();

        return redirect()->route('comics.index');
    }
}
