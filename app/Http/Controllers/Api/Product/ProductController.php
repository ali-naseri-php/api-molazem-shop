<?php

namespace App\Http\Controllers\Api\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProductRequest;
use App\Http\Resources\indexProductResource;
use App\Http\Resources\ShowProductResource;
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
     */public function show(string $id)
{
    $product = Product::find($id);

    if (!$product) {
        return response()->json(['message' => 'Product not found'], 404);
    }

    return response( new ShowProductResource($product),200);
}



    /**
     * Update the specified resource in storage.
     */

    public function update(UpdateProductRequest $request, string $id)
    {
        // جستجو برای محصول با استفاده از ID
        $product = Product::find($id);

        // اگر محصول پیدا نشد، یک پیام خطا به کاربر نمایش داده می‌شود
        if (!$product) {
            return response()->json(['message' => 'Product not found'], 404);
        }

        // به‌روزرسانی اطلاعات محصول با داده‌های ورودی
        $product->update([
                             'ProjectName' => $request->input('ProjectName'),
                             'location' => $request->input('location'),
                             'picture' => $request->input('picture') ?? $product->picture,
                             'typeProject' => $request->input('typeProject'),
                             'customer' => $request->input('customer'),
                             'discription' => $request->input('discription') ?? $product->discription,
                             'StartYearProject' => $request->input('StartYearProject'),
                             'Chalanges' => $request->input('Chalanges') ?? $product->Chalanges,
                             'Solution' => $request->input('Solution') ?? $product->Solution,
                         ]);

        // بازگشت پاسخ موفقیت‌آمیز همراه با اطلاعات محصول به‌روز شده
        return response()->json([
                                    'message' => 'Product updated successfully',
                                    'product' => $product,
                                ]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // پیدا کردن محصول با استفاده از id
        $product = Product::find($id);

        // اگر محصول پیدا نشد، خطا برمی‌گردانیم
        if (!$product) {
            return response()->json([
                                        'message' => 'Product not found.'
                                    ], 404);
        }

        // حذف محصول
        $product->delete();

        // پاسخ موفقیت‌آمیز
        return response()->json([
                                    'message' => 'Product deleted successfully.'
                                ], 200);
    }

}
