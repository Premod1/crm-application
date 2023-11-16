<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        // $client = Client::paginate(10);
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
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return view('admin.client.edit', compact('client'));
    }
    public function update(Request $request, $id)
    {
        Client::findOrFail($id)->update($request->all());
        return redirect()->route('client')->with('success', 'client update successfully');
    }
    public function delete($id)
    {
        Client::findOrFail($id)->delete();
        return redirect()->route('client')->with('success', 'client delete successfully');
    }
}
