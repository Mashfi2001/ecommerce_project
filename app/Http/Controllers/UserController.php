<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $uName = $request->get('uname', '');
        $pass = $request->get('pass', '');

        $userInfo = User::where('name', $uName)->first();

        if ($userInfo && Hash::check($pass, $userInfo->password) && $userInfo->is_admin==1) {
            return redirect('/admin_products')->with('success', 'You have been logged in successfully!');
        }else if ($userInfo && Hash::check($pass, $userInfo->password) && $userInfo->is_admin==0) {
            return redirect('/products')->with('success', 'You have been logged in successfully!');
        }else {
            return redirect()->back()->with('error', 'Invalid credentials!');
        }
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
    public function store(Request $request){
        User::insert([
            'name' => $request->get('uname'),
            'email' => $request->get('email'),
            'mobile' => $request->get('mobile'),
            'password' => bcrypt($request->get('pass')),
        ]);

        return redirect('/admin_products');
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
