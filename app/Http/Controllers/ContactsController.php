<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contatos;

class ContactsController extends Controller
{
    public function index()
    {
        $findContatos = Contatos::get();
        return view('pages.contatos.index', compact('findContatos'));
    }
}
