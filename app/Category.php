<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = ['name', 'parent_id', 'photo'];

    public function validateData($request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image',
        ]);
    }

    public function createCategory($request)
    {
        $path = $request->file('photo')->store('photo', ['disk' => 'public']);
        $this->name = $request->name;
        $this->photo = $path;
        $this->parent_id = $request->parent_id;
        $this->save();
    }
}
