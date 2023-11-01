<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecipeStep extends Model
{
    use HasFactory;

    protected $fillable = [
        "recipe_id",
        "name",
        "order",
        "recipe_ids",
    ];

    public function recipe()
    {
        return $this->hasOne(Recipe::class);
    }
    public function ingredients(): Collection
    {
        return Recipe::whereIn("id", '(' . $this->recipe_ids . ')')->get();
    }
}
