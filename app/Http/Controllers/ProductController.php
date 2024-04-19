<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Comment;
use App\Models\Country;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:products',
            'description' => 'nullable',
            'image_url' => 'nullable',
            'category' => 'required',
            'manufacturer' => 'required',
            'area' => 'required',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //return view('products.show', compact('product'));
        $countries = Country::all();
        return view('product-page', compact('product', 'countries' ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'code' => 'required|unique:products,code,' . $product->id,
            'description' => 'nullable',
            'image_url' => 'nullable',
            'category' => 'required',
            'manufacturer' => 'required',
            'area' => 'required',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Product deleted successfully');
    }

    public function catalog()
    {
        $products = Product::all();


        return view('catalog-page', compact('products'));
    }

    public function comments(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'product_id' => 'required|exists:products,id',
            'city_id' => 'required|exists:cities,id'
        ]);

        Comment::create([
            'text' => $request->text,
            'product_id' => $request->product_id,
            'city_id' => $request->city_id
        ]);

        return redirect()->back()->with('success', 'Comment added successfully');
    }

    public function analysis(Request $request)
    {
        try {
            $review = $request->input('comment');
            $response = Http::post(
                'https://ap8i28dv72.execute-api.us-east-1.amazonaws.com/BlogoSphere/sentiment_analysis',
                [
                'text' => $review
                ]);
            if ($response->status() == 200) {
                $response_body = json_decode($response->body());
                $value = json_decode($response_body->body);
            } else {
                return json_encode(['msg' => 'Unexpected HTTP status']) ;
            }
        } catch (\Exception $e) {
            return json_encode(['msg' => 'Exception status']) ;
        }
        return json_encode(['sentiment' => $value->compound]);
    }

    public function cities($country)
    {

        $cities = City::where('country_id', $country)->get();
        return json_encode($cities);
    }

    public function passwords()
    {
        try {
            $response = Http::post('https://jaqe9ppsf3.execute-api.eu-west-1.amazonaws.com/dev',
                [
                'username' => $this->getSeed()
                ]);

            if ($response->status() == 200) {
                $response_body = json_decode($response->body());
                $value = json_decode($response_body->body);
                $parts = explode(':', $value);
                $result = trim($parts[1]);
            } else {
                return json_encode(['msg' => 'Unexpected HTTP status']) ;
            }
        } catch (\Exception $e) {
            return json_encode(['msg' => 'Exception status']) ;
        }
        return json_encode(['password' => $result]);
    }

    function getSeed($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $randomString;
    }
}
