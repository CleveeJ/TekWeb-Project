<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Recipe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Generate the cache key (unique for each day)
        $cacheKey = 'recipes_ordered_' . date('Y-m-d');

        $recipes = Cache::remember($cacheKey, 24 * 60, function () {
            return Recipe::with('user')->limit(30)->get(); //blm ada order by rating
        });

        // Set deterministic randomization with today's date
        $seed = intval(hexdec(md5(date('Y-m-d'))));
        mt_srand($seed);
        $randomIndex = mt_rand(0, $recipes->count() - 1);
        $randomRecipe = $recipes[$randomIndex];

        $recommend = [];
        $recommend['id'] = $randomRecipe->id;
        $recommend['name'] = $randomRecipe->name;
        $recommend['image'] = $randomRecipe->food_image ? Storage::url($randomRecipe->food_image) : null;
        $recommend['user_name'] = $randomRecipe->user->username;
        
        return view('homepage', [
            'title' => 'Home',
            'recommend' => $recommend,
        ]);
    }

    public function login()
    {
        return view('login', [
            'title' => 'Login',
        ]);
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
        //dd($request->all());
        $rules = [
            'name' => 'required',
            'email' => 'required',
            'pass' => 'required | min:8',
        ];
        $messages = [
            'name.required' => 'Username field is required',
            'email.required' => 'Email field is required',
            'pass.required' => 'Password field is required',
            'pass.min' => 'Password must contain at least 8 characters',
        ];
        $valid = Validator::make($request->all(), $rules, $messages);

        if ($valid->fails()) {
            return response()->json(['success' => false, 'message' => $valid->errors()->first()]);
        }
        if (User::where('email', $request->email)->exists()){
            return response()->json(['success' => false, 'message' => "Email sudah digunakan"]);
        }
        User::create([
            'username'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->pass)
        ]);
        return response()->json(['success' => true, 'message' => "Success"], 201);
    }

    public function checkLogin(Request $request)
    {
        //dd($request->all());
        $rules = [
            'email' => 'required',
            'password' => 'required',
        ];
        $messages = [
            'email.required' => 'Email field is required',
            'password.required' => 'Password field is required',
        ];
        $valid = Validator::make($request->all(), $rules, $messages);

        if ($valid->fails()) {
            return redirect()->back()->with('error', $valid->errors()->first());
        }

        $userExist = User::where('email', $request->email)->first();
        // foreach($userExist as $user){
            
        // }
        if ($userExist && Hash::check($request->password, $userExist->password)) {
            return redirect()->route('user.home')->with('success', 'Login success');
        }
        return redirect()->back()->with('error', 'Username/Password incorrect');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
