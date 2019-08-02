<?php
// Criar a Model
// php artisan make:model Brand
// Para testar no terminal a Model:
// php artisan tinker
// use \App\Brand;
// $brand = new Brand;
// $brand->name = "Samsung";
// $brand->save();
// Brand::all();

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
	// Informa a Model que será usado o softdelete
	// Necessário criar na migration uma função
	use SoftDeletes;
    protected $fillable = ['name'];

}
