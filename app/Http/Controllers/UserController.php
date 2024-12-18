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
            return $recipes = Recipe::with('user')
            ->leftJoin('comments', 'recipes.id', '=', 'comments.recipe_id')
            ->select('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image', \DB::raw('AVG(comments.rating) as average_rating'))
            ->groupBy('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image',)
            ->having('average_rating', '>', 3)
            ->limit(100)
            ->get();
        });

        // Set deterministic randomization with today's date
        $seed = intval(hexdec(md5(date('Y-m-d'))));
        mt_srand($seed);

        $recommend = null;

        if ($recipes->isNotEmpty()) {
            $randomIndex = mt_rand(0, $recipes->count() - 1);
            $randomRecipe = $recipes[$randomIndex];
        
            $recommend = [];
            $recommend['id'] = $randomRecipe->id;
            $recommend['name'] = $randomRecipe->name;
            $recommend['image'] = $randomRecipe->food_image ? Storage::url($randomRecipe->food_image) : null;
            $recommend['user_name'] = $randomRecipe->user->username;
        }

        $recipes = Recipe::with('user')
        ->leftJoin('comments', 'recipes.id', '=', 'comments.recipe_id')
        ->select(
            'recipes.id',
            'recipes.name',
            'recipes.user_id',
            'recipes.food_image',
            \DB::raw('AVG(comments.rating) as average_rating')
        )
        ->groupBy('recipes.id', 'recipes.name', 'recipes.user_id', 'recipes.food_image')
        ->orderByDesc('average_rating')
        ->limit(5)
        ->get();
        
         // Fetch top 5 recipes with the highest average rating from the cached list
        $topRecipes = $recipes->sortByDesc('average_rating')->take(5);

        $data = [];
        foreach ($topRecipes as $r) {
            $data[] = [
                'id' => $r->id,
                'name' => $r->name,
                'image' => $r->food_image ? Storage::url($r->food_image) : null,
                'user_name' => $r->user->username,
                'rating' => $r->average_rating ? $r->average_rating : 0,
            ];
        }

        // Return the view with both recommendation and top recipes
        return view('homepage', [
            'title' => 'Home',
            'recommend' => $recommend,
            'leaderboard' => $data,
        ]);
    }

    public function login()
    {
        return view('login', [
            'title' => 'Login',
        ]);
    }

    public function logout(Request $request)
    {
        // Menghapus session email
        $request->session()->forget('email');
        
        // Menjalankan flush untuk menghapus semua data sesi
        $request->session()->flush();
        
        // Redirect ke halaman login atau halaman lain setelah logout
        return redirect()->route('user.home')->with('success', 'Logout successful');
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
            session()->put('email', $request->email);
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
