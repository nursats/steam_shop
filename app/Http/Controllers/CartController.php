<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use App\Models\Knife;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        if (!auth()->check()) {
            return view('cart.guest');
        }

        $items = CartItem::with('knife')->where('user_id', Auth::id())->get();

        return view('cart.index', compact('items'));
    }

    public function add(Request $request, $knifeId)
    {
        $userId = Auth::id();

        $cartItem = CartItem::where('user_id', $userId)->where('knife_id', $knifeId)->first();

        if ($cartItem) {
            $cartItem->quantity++;
            $cartItem->save();
        } else {
            CartItem::create([
                'user_id' => $userId,
                'knife_id' => $knifeId,
                'quantity' => 1,
            ]);
        }

        return redirect()->back()->with('success', 'Товар добавлен в корзину!');
    }

    public function remove($id)
    {
        $cartItem = CartItem::findOrFail($id);
        if ($cartItem->user_id == Auth::id()) {
            $cartItem->delete();
        }
        return redirect()->back();
    }
}
