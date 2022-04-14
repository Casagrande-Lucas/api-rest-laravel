<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Store $store
     * @return \Illuminate\Http\Response|\App\Models\Product
     */
    public function index(Store $store): Product
    {
        return $store->products;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Store $store
     * @param  Product $product
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\App\Models\Product
     */
    public function store(Request $request, Store $store, Product $product): Product
    {
        $request = $request->all();
        $request['store_id'] = $store->id;
        return $product->create($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  Store $store
     * @param  Product $product
     * @return \Illuminate\Http\Response|\App\Models\Product
     */
    public function show(Store $store, Product $product): Product
    {
        return $product->where([
            ['store_id', $store->id],
            ['id', $product->id]
            ])->first();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Store $store
     * @param  Product $product
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\App\Models\Product
     */
    public function update(Request $request, Store $store, Product $product): Product
    {
        $product->update($request->all());
        return $product;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Store $store
     * @param  Product $product
     * @return \Illuminate\Http\Response|bool
     */
    public function destroy(Store $store, Product $product): bool
    {
        return $product->delete([
            ['store_id', $store->id],
            ['id', $product->id]
            ]);
    }
}
