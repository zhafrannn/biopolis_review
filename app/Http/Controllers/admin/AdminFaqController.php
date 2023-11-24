<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\FrequentlyAskedQuestion;
use Illuminate\Http\Request;

class AdminFaqController extends Controller
{
    public function store(Request $request)
    {
        FrequentlyAskedQuestion::create(
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );

        return back();
    }

    public function update($id, Request $request)
    {
        $items = FrequentlyAskedQuestion::where('id', $id)->first();
        $items->update(
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );

        return back();
    }

    public function destroy($id)
    {
        FrequentlyAskedQuestion::where('id', $id)->delete();

        return back();
    }
}
