<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreController extends Controller
{
    private $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|\App\Models\Store
     */
    public function index(): Store
    {
        return $this->store->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response|\App\Models\Store
     */
    public function store(Request $request): Store
    {
        return $this->store->create($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  Store  $store
     * @return \Illuminate\Http\Response|\App\Models\Store
     */
    public function show(Store $store): Store
    {
        return $store;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Store $store
     * @return \Illuminate\Http\Response|\App\Models\Store
     */
    public function update(Request $request, Store $store): Store
    {
        $store->update($request->all());
        return $store;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Store $store
     * @return \Illuminate\Http\Response|bool
     */
    public function destroy(Store $store): bool
    {
        return $store->delete();
    }
}
