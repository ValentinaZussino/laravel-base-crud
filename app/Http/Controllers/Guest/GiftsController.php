<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gift;

class GiftsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gifts = Gift::all();
        return view('gifts.index', compact('gifts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gifts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'gift' => 'required|max:50',
            'name' => 'required|max:50',
            'surname' => 'required|max:50',
            'age' => 'required',
            'country' => 'required|max:50',
            'city' => 'required',
            'address' => 'required',
            'image' => 'required',
        ]);

        $formData = $request->all();
        $newGift = new Gift;
        $newGift->gift = $formData['gift'];
        $newGift->name = $formData['name'];
        $newGift->surname = $formData['surname'];
        $newGift->age = $formData['age'];
        $newGift->country = $formData['country'];
        $newGift->city = $formData['city'];
        $newGift->address = $formData['address'];
        $newGift->image = $formData['image'];
        $newGift->save();
        return redirect()->route('gifts.show',$newGift->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Gift $gift)
    {
        return view('gifts.show', compact('gift'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gift $gift)
    {
        return view('gifts.edit', compact('gift'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $gift = Gift::find($id);

        $formData = $this->validation($request->all());
        $gift->gift = $formData['gift'];
        $gift->name = $formData['name'];
        $gift->surname = $formData['surname'];
        $gift->age = $formData['age'];
        $gift->country = $formData['country'];
        $gift->city = $formData['city'];
        $gift->address = $formData['address'];
        $gift->image = $formData['image'];
        $gift->update();
        return redirect()->route('gifts.show', $gift->id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gift $gift)
    {
        $gift->delete();
    }
}
