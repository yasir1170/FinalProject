<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Part; 
use Illuminate\Support\Facades\DB;

class PartController extends Controller
{
    public function showParts(){
        $parts = DB::table('parts')->get();
        return view ('parts',['data' => $parts]);
    }

    public function cart()
    {
        return view('cart', ['data' => []]);
    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $data = Part::where('parts_name', 'LIKE', '%' . $query . '%')
                        ->orWhere('parts_description', 'LIKE', '%' . $query . '%')
                        ->get();

        return view('search', ['data' => $data, 'query' => $query]);
    }
 
    public function checkout()
    {
        $cart = session()->get('cart', []);

        try {
            // Start a database transaction
            DB::beginTransaction();

            // Loop through the cart and update the database in a batch
            foreach ($cart as $id => $details) {
                $product = Part::findOrFail($id);
                $product->stock_qty -= $details['quantity'];
                $product->save();
            }

            // Commit the transaction if all updates are successful
            DB::commit();

            // Clear the cart after successful checkout
            session()->forget('cart');

            // Redirect to the thankyou view
            return view('thankyou'); // Assuming you have a thankyou.blade.php file
        } catch (\Exception $e) {
            // An error occurred, rollback the transaction
            DB::rollback();

            // Handle the error (you can log it, show a user-friendly message, etc.)
            return redirect()->route('cart')->with('error', 'An error occurred during checkout.');
        }
    }

    public function addToCart($id)
    {
        $product = Part::findOrFail($id);
    
        // Check if there is enough stock
        if ($product->stock_qty <= 0) {
            return redirect()->back()->with('error', 'Sorry, this item is out of stock.');
        }
    
        $cart = session()->get('cart', []);
    
        if (isset($cart[$id])) {
            // Check if there is enough stock for the additional quantity
            if ($product->stock_qty <= 0 || $cart[$id]['quantity'] + 1 > $product->stock_qty) {
                return redirect()->back()->with('error', 'Sorry, there is not enough stock for this item.');
            }
    
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "product_name" => $product->parts_name,
                "photo" => $product->photo,
                "price" => $product->price,
                "quantity" => 1
            ];
        }
    
        session()->put('cart', $cart);
    
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    
    
    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $oldQuantity = $cart[$request->id]["quantity"];

            // Get the product from the database
            $product = Part::findOrFail($request->id);

            // Calculate the difference in quantity
            $quantityDifference = $request->quantity - $oldQuantity;

            // Check if there is enough stock for the new quantity
            if ($quantityDifference > 0 && $product->stock_qty < $quantityDifference) {
                session()->flash('success', 'Sorry, there is not enough stock for this item.');
                // return redirect()->back()->with('error', 'Sorry, there is not enough stock for this item.');
            }

            // Update the cart quantity
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);

            session()->flash('success', 'Cart successfully updated!');
            return response()->json(['success' => true]);
        }
          
        
        return redirect()->route('cart');
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                // Increase stock_qty by the original quantity
                // $product = Part::findOrFail($request->id);
                // $product->stock_qty += $cart[$request->id]['quantity'];
                // $product->save();

                unset($cart[$request->id]);
                session()->put('cart', $cart);

                session()->flash('success', 'Item successfully removed!');
                return response()->json(['success' => true]);
            }
        }

        return response()->json(['success' => false, 'message' => 'Error removing product.']);
    }

    
}


