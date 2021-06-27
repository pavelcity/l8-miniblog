<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory; 

		public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }


		protected $fillable = [
			'title',
			'slug',
			'short',
			'descr',
			'pic',
			'category_id',
		];




		public function category () {
			return $this->belongsTo(Category::class);
		}
}
