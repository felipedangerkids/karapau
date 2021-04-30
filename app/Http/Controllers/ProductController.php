<?php

namespace App\Http\Controllers;

use App\Models\Porto;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function stepOne(Request $request)
    {
        $portos = Porto::all();
        $product = $request->session()->get('product');
        return view('seller.salle-step-1', compact('product', 'portos'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([]);
        $product = $request->all();
        session()->put('product', $product);

        return redirect()->route('products.create.step.two');
    }

    public function stepTwo(Request $request)
    {
        $product = $request->session()->get('product');
        return view('seller.salle-step-2', compact('product'));
    }

    public function postCreateStepTwo(Request $request)
    {
        $request->validate([
            'especie' => 'required',
            'qty' => 'required',
            'unity' => 'required',
            'size' => 'required',
            'art' => 'required',
            'price' => 'required',

        ]);

        $product2 = $request->all();
        session()->put('product-2', $product2);

        $session = $request->session()->get('product');
        $session2 = $request->session()->get('product-2');

        // $product = $request->all();


        $product = Product::create([
            'user_id' => $session['user_id'],
            'porto' => $session['porto'],
            'ship' => $session['ship'],
            'fishing_zone' => $session['fishing_zone'],
            'especie' => $session2['especie'],
            'qty' => $session2['qty'],
            'unity' => $session2['unity'],
            'size' => $session2['size'],
            'art' => $session2['art'],
            'price' => $session2['price'],

        ]);

        $request->session()->forget('product');
        $request->session()->forget('product-2');
        return redirect()->route('dashboard')->with('success', 'Produto criado com sucesso!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->session()->forget('product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
