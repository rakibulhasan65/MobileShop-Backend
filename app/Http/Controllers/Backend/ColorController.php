<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $colors = Color::orderBy('color_name', 'asc')->get();
        return view('backend.color.index', compact('colors'));
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
        $color = new Color();
        $color->color_name = $request->color_name;
        $color->color_code = strtoupper($request->color_code);
        $color->status = $request->status;
        $color->save();

        notify()->success('Color created successfully!');
        return redirect()->route('colors.index');
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


    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $color = Color::findOrFail($id);
        $color->color_name = $request->color_name;
        $color->color_code = strtoupper($request->color_code);
        $color->status = $request->status;
        $color->update();

        notify()->success('Color updated successfully!');
        return redirect()->route('colors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $color = Color::findOrFail($id);
            $color->delete();

            notify()->success('Color deleted successfully!');
        } catch (ModelNotFoundException $exception) {
            return back()->withError('Color not found.');
        }
    }



    public function multipleDestroy(Request $request)
    {
        $status = 200;
        $message = 'Colors deleted successfully';
        $route = route('colors.index');

        foreach ($request->ids as $id) {
            $deleteItem = Color::find( $id);

            if ($deleteItem) {
                $deleteItem->delete();

            } else {
                $status = 404;
                $message = 'One or more posts not found';
            }
        }
        // Return the response after the loop
        return response()->json(['status' => $status, 'message' => $message, 'route' => $route]);
    }
}
