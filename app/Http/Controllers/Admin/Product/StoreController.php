<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Models\Product;
use Faker\Generator;
use Illuminate\Container\Container;

class StoreController extends Controller
{
    public function __invoke(StoreProductRequest $request)
    {
        $data = $request->all();
        $data['photo'] = $data['photo'] ?? Container::getInstance()->make(Generator::class)->imageUrl;
        Product::create($data);
        return redirect()->route('products.index');
    }
}
