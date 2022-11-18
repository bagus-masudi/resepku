<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Recipe;
use App\Models\RecipeIngredient;
use App\Models\RecipeStep;

class HomeController extends Controller
{
    public function index(Recipe $recipe){

        $recipe = Recipe::orderBy('created_at', 'DESC')->get();

        return view('welcome',[
            'recipe' => $recipe
        ]);
    }

    public function show(Recipe $recipe){

        $recipe = Recipe::All()->where('user_id', Auth::id());

        return view('myresep',[
            'recipe' => $recipe
        ]);
    }

    public function create(){
        return view('createrecipe');
    }

    public function detail(Recipe $recipe, RecipeIngredient $ingredient, RecipeStep $step, Request $request){
        $id = $recipe->id;
        $ingredient = RecipeIngredient::All()->where('recipe_id', $recipe->id);
        $step = RecipeStep::All()->where('recipe_id', $recipe->id);
        
        return view('detailrecipe',[
            'recipe' => $recipe,
            'ingredient' => $ingredient,
            'step' => $step
        ]);
    }

    public function createStore(Request $request, User $user){
        $data = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'bahan' => 'required',
            'langkah' => 'required',
            'photo' => 'required',
            'photo.*' => 'mimes:jpg,jpeg,png|max:2000'
        ]);

        if ($request->hasfile('photo')) {            
            $request->photo = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move(public_path('images'), $request->photo);
        }

        $data['user_id'] = Auth::id();
        $data['photo'] = $request->photo;
            
        $recipe = Recipe::create($data);

        $jumlahbhn = count($request->bahan);
        for($i = 0; $i < $jumlahbhn; $i++) {
            RecipeIngredient::create([
                'recipe_id' => $recipe->id,
                'name' => $request->bahan[$i]
            ]);
        }

        $jumlahlangkah = count($request->langkah);
        for($i = 0; $i < $jumlahlangkah; $i++) {
            RecipeStep::create([
                'recipe_id' => $recipe->id,
                'name' => $request->langkah[$i]
            ]);
        }

        return redirect()->route('create');
    }
}
