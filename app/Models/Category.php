<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Blog;

class Category extends Model
{
    use HasFactory;
		use Sluggable;

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
			'slug'
		];


		public function blogs () {
			return $this->hasMany(Blog::class);
		}
}
