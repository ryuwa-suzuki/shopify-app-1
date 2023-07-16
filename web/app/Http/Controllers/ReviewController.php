<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;
use Illuminate\Support\Facades\Log;
use Shopify\Clients\Rest;
use Shopify\Rest\Admin2023_04\Metafield;

class ReviewController extends Controller
{
    public function create(Request $request)
    {
        $session = $request->get('shopifySession'); // Provided by the shopify.auth middleware, guaranteed to be active

        $client = new Rest($session->getShop(), $session->getAccessToken());
        // $result = $client->get('collects');
        // $reviews = $request->all();
        $success = $code = $error = null;

        // $reviews = Review::get()->toArray();
        // var_dump($request->get('shopifySession'));exit;
        $data = [
            'product_id' => 8355795730740,
            'namespace' => "suzuki",
            'key' => "app",
            'value' =>8,
            'type'=> "number_integer"
            // 'value_type' => 'string'
        ];

        try{
            // $response = $client->post(path:'products/8355795730740/metafields', body:[
            //     'product_id' => 8355795730740,
            //     'namespace' => "suzuki",
            //     'key' => "app",
            //     'value' =>8,
            //     'type'=> "number_integer"
            //     // 'value_type' => 'string'
            // ]);
            // $response = $client->get('products/metafields');
            $Metafield = new Metafield($session);
            $Metafield->product_id = 8355795730740;
            $Metafield->namespace = "suzuki";
            $Metafield->key = "app";
            $Metafield->value = 8;
            $Metafield->type = "number_integer";
            $response = $Metafield->save(true);
            var_dump($response);exit;

            $success = true;
            $code=200;
            // Review::create([
            //     'title' => $reviews['title'],
            //     'content' => $reviews['content'],
            //     'review' => $reviews['review'],
            //     'product_id' => $reviews['productId'],
            //     'variant_id' => $reviews['variantId']
            // ]);
        } catch (\Exception $e) {
            var_dump('aaaa'.$e->getMessage());exit;
            $success = false;
            $code = 500;
            $error = $e->getMessage();

            Log::error("Failed to create reviews: $error");
        } finally {
            return response()->json(["success" => $success, "error" => $error], $code);
        }
    }
}
