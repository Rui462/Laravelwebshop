<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tablaneve;

class TablaneveController extends Controller
{
    // Az adatok megjelenítése
    public function index()
    {
        $emberek = Tablaneve::all(); // Lekéri az összes adatot
        return view('tablaneve.index', compact('emberek'));
    }

    // Adatok mentése az adatbázisba
    public function store(Request $request)
    {
        // Validáció
        $request->validate([
            'nev' => 'required|string|max:255',
            'kor' => 'required|integer|min:1',
        ]);

        // Új rekord létrehozása
        Tablaneve::create([
            'nev' => $request->nev,
            'kor' => $request->kor,
        ]);

        // Visszairányítás az oldalra
        return redirect()->route('tablaneve.index')->with('success', 'Sikeresen hozzáadva!');
    }
}
