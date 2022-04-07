<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(Request $request,Product $product)
    {
        $product->update($request->all());
        return redirect()->route('products.index');
    }
}
