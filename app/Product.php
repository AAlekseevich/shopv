<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['title', 'photo', 'description', 'price', 'category_id'];

    public function validateData($request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'photo' => 'required|image',
            'description' => 'required',
            'price' => 'required|numeric'
        ]);
    }

    public function createProduct($request)
    {
        $path = $request->file('photo')->store('photo', ['disk' => 'public']);
        $this->title = $request->title;
        $this->photo = $path;
        $this->description = $request->description;
        $this->price = $request->price;
        $this->category_id = $request->category;
        $this->save();
    }
}
