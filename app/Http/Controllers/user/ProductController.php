<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Http\Request;
use DataTables;
use Intervention\Image\Facades\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $products = Product::all();
        return view('user.product.index');
    }
    public function data()
    {

        $userId = auth()->id();
        $products = Product::select(['id', 'name', 'purchase_price', 'sales_price', 'quantity', 'unit', 'description', 'image'])
            ->where('user_id', $userId)
            ->get();



        return Datatables::of($products)->make(true);
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        // Validate the form data
        $validatedData = $request->validate([
            'name' => 'required|string',
            'description' => 'nullable|string',
            'image' => 'nullable|image',
            'd_category' => 'nullable|string',
            'p_category' => 'nullable|string',
            // 'quantity' => 'nullable|integer|min:1',
            // 'unit' => 'nullable|string',
            // 'purchase_price' => 'nullable|numeric|min:0',
            // 'sales_price' => 'nullable|numeric|min:0',

        ]);


        // Create a new product instance
        $product = new Product;
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->d_category = $validatedData['d_category'];
        $product->p_category = $validatedData['p_category'];
        // $product->quantity = $validatedData['quantity'];
        // $product->left_quantity = $validatedData['quantity'];
        // $product->unit = $validatedData['unit'];
        // $product->purchase_price = $validatedData['purchase_price'];
        // $product->sales_price = $validatedData['sales_price'];
        $product->user_id = auth()->user()->id;

        // Handle image upload if provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('images/products/' . $filename);

            // Ensure the directory exists
            $directory = public_path('images/products');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $product->image = $filename;
            $product->save();
        }
        $product->save();

        return response()->json(['success' => true, 'message' => 'Product added successfully.']);
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findorFail($id);
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // dd($id);
        $product = Product::findorFail($id);
        // return response()->json($product);  
        return view('user.product.edit', compact('product'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findorFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->d_category = $request->d_category;
        $product->p_category = $request->p_category;
        // $product->quantity = $request->quantity;
        // $product->left_quantity = $request->quantity;
        // $product->unit = $request->unit;

        // $product->purchase_price = $request->purchase_price;
        // $product->sales_price = $request->sales_price;
        // Handle image upload if provided

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();        
            $location = public_path('images/products/' . $filename);
            // Ensure the directory exists  
            $directory = public_path('images/products');
            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }
            $image->move($directory, $filename);
            $product->image = $filename;
                   
        }
        $product->save();
        return response()->json(['success' => true, 'message' => 'Product updated successfully.']);
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(string $id)
    {
        //
    }


    // public function getProductsByCategories($d_category, $p_category)
    // {
    //     $products = Product::where('d_category', $d_category)
    //         ->where('product_category', $p_category)
    //         ->get();

    //     return view('products.partials.products_list', compact('products'));
    // }

    // public function getProductsByCategories($d_category, $p_category)
    // {
    //     // dd($d_category,$p_category);
    //     if ($d_category == 0 && $p_category != 0) {
    //         $products = Product::where('p_category', $p_category)->get();
    //         return response()->json([
    //             'status' => 'success',
    //             'data' => $products
    //         ]);
    //     } else if ($d_category != 0 && $p_category == 0) {
    //         $products = Product::where('d_category', $d_category)->get();
    //         return response()->json([
    //             'status' => 'success',
    //             'data' => $products
    //         ]);
    //     } else if ($d_category == 0 && $p_category == 0) {
    //         $products = Product::all();
    //         return response()->json([
    //             'status' => 'success',
    //             'data' => $products
    //         ]);
    //     } else if ($d_category != 0 && $p_category != 0) {
    //         $products = Product::where('d_category', $d_category)
    //             ->where('p_category', $p_category)
    //             ->get();
    //         return response()->json([
    //             'status' => 'success',
    //             'data' => $products
    //         ]);
    //     }
    //     return response()->json([
    //         'status' => 'error',
    //         'message' => 'No products found'
    //     ]);
    // }

    public function getProductsByCategories($d_category, $p_category)
{
    $query = Product::query();

    if ($d_category != 0) {
        $query->where('d_category', $d_category);
    }

    if ($p_category != 0) {
        $query->where('p_category', $p_category);
    }

    // $products = $query->get()->orderby('id', 'desc');
    if ($d_category == 1) {
        $products = $query->orderBy('id', 'desc')->get(); 
    } else {
        $products = $query->where('d_category', '!=', 1)->orderBy('id', 'desc')->get();
    }
    

    if ($products->isEmpty()) {
        return response()->json([
            'status' => 'error',
            'message' => 'No products found.'
        ]);
    }

    return response()->json([
        'status' => 'success',
        'data' => $products
    ]);
}

}
