<?php
 
namespace App\Http\Controllers\Admin;
 
use App\Http\Controllers\Controller;
use App\Models\Ingredient;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
 
class IngredientController extends Controller
{
    public function index(): View
    {
        $ingredients = Ingredient::paginate(10);
 
        return view('admin/ingredients/index', [
            'ingredients' => $ingredients
        ]);
    }
 
    public function store(Request $request): RedirectResponse
    {
 
        $request->validate(
            [
                'name' => 'required|min:3|max:20',
            ]
        );
 
        Ingredient::create($request->all());
            return redirect('admin/ingredients/index')
            ->with('success', 'Ingredient created successfully!');
    }
 
    public function create(): View|RedirectResponse
    {
        $ingredients = Ingredient::where('id', null)->get();
        return view('admin/ingredients/create', [
            'ingredients' => $ingredients
        ]);
    }
 
    public function edit(int $id, Request $request)
    {
        $ingredient = Ingredient::find($id);
        if ($ingredient === null) {
            abort(404);
        }
 
        if ($request->isMethod('post')) {
            $request->validate(
                ['name' => 'required|min:3|max:20']
            );
 
            $ingredient->fill($request->all());
            $ingredient->is_active=$request->post('is_active', false);
            $ingredient->save();
 
            return redirect('admin/ingredients/index')->with('success', 'Ingredient updated successfully!');
        }
 
        return view('admin/ingredients/edit', compact('ingredient'));
    }
 
    public function delete(int $id)
    {
        $ingredient = Ingredient::find($id);
        if ($ingredient === null) {
            abort(404);
        }
        $ingredient->delete();
        return redirect('admin/ingredients/index')->with('success', 'Ingredient removed successfully!');
    }
}