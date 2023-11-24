<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Testimony;
use Illuminate\Http\Request;

class AdminTestimonyController extends Controller
{
    public function store(Request $request)
    {
        Testimony::create([
            'name' => $request->name,
            'age' => $request->age,
            'description' => $request->description,
            'rate' => $request->rate
        ]);

        return back();
    }

    public function update($id, Request $request)
    {
        $items = Testimony::where('id', $id)->first();
        $items->update([
            'name' => $request->name,
            'age' => $request->age,
            'description' => $request->description,
            'rate' => $request->rate
        ]);

        return back();
    }

    public function destroy($id)
    {
        Testimony::where('id', $id)->delete();

        return back();
    }
}
