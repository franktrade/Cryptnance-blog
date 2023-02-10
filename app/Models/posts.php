<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableTrait;
class posts extends Model
{  
    
    use SluggableTrait;
   
    protected $table = 'posts';
    
    protected $fillable = [
        'slug',
        'title',
        'description',
        'image_path',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
      /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
  
};
