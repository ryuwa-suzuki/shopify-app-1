<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Log;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        var_dump($request->header());exit;
        $reviews = $request->all();
        $success = $code = $error = null;
        // $reviews = Review::get()->toArray();
        // var_dump($request->get('shopifySession'));exit;
        var_dump($reviews);exit;
        // try{
        //     $success = true;
        //     $code=200;
        //     Review::create([
        //         'title' => $reviews['title'],
        //         'content' => $reviews['content'],
        //         'review' => $reviews['review'],
        //         'product_id' => $reviews['productId'],
        //         'variant_id' => $reviews['variantId']
        //     ]);
        // } catch (\Exception $e) {
        //     $success = false;
        //     $code = 500;
        //     $error = $e->getMessage();

        //     Log::error("Failed to create reviews: $error");
        // } finally {
        //     return response()->json(["success" => $success, "error" => $error], $code);
        // }
    }
}
