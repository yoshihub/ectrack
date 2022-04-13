<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Line;

class LineController extends Controller
{
    public function create(Request $request)
    {
        $cart_id = Session::get('cart');
        $line = Line::where('cart_id', $cart_id)
            ->where('product_id', $request->input('id'))
            ->first();

        if ($line) {
            $line->quantity = 1;
            $line->save();
        } else {
            Line::create([
                'cart_id' => $cart_id,
                'product_id' => $request->input('id'),
                'quantity' => 1,
            ]);
        }

        return redirect(route('cart.index'));
    }

    public function delete(Request $request)
    {
        Line::destroy($request->input('id'));

        return redirect(route('cart.index'));
    }
}
