<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Benefit;
use Illuminate\Http\Request;

class AdminBenefitController extends Controller
{
    public function store(Request $request)
    {
        Benefit::create(
            [
                'title' => $request->title,
                'description' => $request->description
            ]
        );

        return back();
    }

    public function update($id, Request $request)
    {
        $items = Benefit::where('id', $id)->first();
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
        Benefit::where('id', $id)->delete();

        return back();
    }
}
