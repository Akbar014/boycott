<?php

namespace App\Http\Controllers;

use App\Models\ContactInfo;
use App\Models\Product;
use App\Models\Sale;
use App\Models\User;
use DataTables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $userId = auth()->id();
        $total_product = Product::where('user_id',$userId)->count();
        $invoice = Sale::where('user_id',$userId)->count();
        return view('user.home',compact('total_product','invoice'));
    }
    
    public function adminHome()
    {
        
        return view('admin.home');
    }

    public function frontHome()
    {
        $products = Product::where('status',1)->where('d_category' != 1)->orderBy('id','desc')->take(6)->get();
        return view('frontend.home');
    }

    public function userregister(Request $request){
        // dd($request->all());
        $user = new User;
        $user['name'] = $request->name;
        $user['email'] = $request->email;
        $user['role_id'] = 1;
        $user['password'] = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with('message','New user created Sucessfully');
    }

    public function product(){
        dd('Upcoming ');
    }

    public function data()
    {

        $users = User::select(['id', 'name', 'email'])
        
        ->get();
        return Datatables::of($users)->make(true);
    }


    public function contactFormSubmit(Request $request)
    {
        // Validate the form data
        // Validate the form inputs
        // $validated = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'phone' => 'nullable|string',
        //     'subject' => 'required|string|max:255',
        //     'description' => 'required|string',
        // ]);
        dd($request->all());
        $query = new ContactInfo();
        $query->name = $request->name;
        $query->phone = $request->phone;
        $query->subject = $request->subject;
        $query->description = $request->description;
        $query->save();

        // Prepare the email data
        // $emailContent = '
        //     <h1>Contact Information</h1>
        //     <p><strong>Name:</strong> ' . $validated['name'] . '</p>
        //     <p><strong>Email:</strong> ' . $validated['email'] . '</p>
        //     <p><strong>Phone:</strong> ' . $validated['phone'] . '</p>
        //     <p><strong>Message:</strong> ' . $validated['description'] . '</p>
        // ';

        // // Send the email
        // Mail::send([], [], function ($message) use ($validated, $emailContent) {
        //     $message->to('akbar.cse47@gmail.com')
        //         ->subject($validated['subject'])
        //         ->html($emailContent); // Directly pass the HTML string here
        // });

        // Redirect back or show a success message
        // return redirect()->back()->with('success', 'Your message has been sent successfully!');
        // return view('frontend.contacts.thank');
        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
