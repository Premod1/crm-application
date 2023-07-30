<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $client = Client::all();
        return view('admin.client.index', compact('client'));
    }

    public function create()
    {
        return view('admin.client.create');
    }
    public function store(Request $request)
    {
        $client = new Client;

        $client->name = $request->name;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->description = $request->description;

        $client->save();

        return redirect()->route('client')->with('success', 'client add successfully');
    }
}
