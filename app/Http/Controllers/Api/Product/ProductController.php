<?php

namespace App\Http\Controllers\Api\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Controllers\Controller;
use App\Http\Resources\indexProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Product::all();
        return response(indexProductResource::collection($data), 200);

    }



    /**
     * Store a newly created resource in storage.
     */


    public function store(StoreProductRequest $request)
    {
        // داده‌های ولید شده
        $validated = $request->validated();

        // ذخیره در دیتابیس
        Product::create($validated);

        return response()->json(['message' => 'Product created successfully.'], 201);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
