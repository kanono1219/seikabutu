<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    use HasFactory;
    use SoftDeletes;
    //「1対多」の関係なので単数系に
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
    protected $fillable = [
        'name',
        'overview',
        'image_url',
        'category_id',
    ];
    protected $attributes = [
        'category_id' => '1',
        'location' => '1',
        'start_date' => '2024-08-01 18:00:00',
        'end_date' => '2024-08-01 21:00:00',
    ];
    
    
    
    public function getPaginateByLimit(int $limit_count = 5)
    {
    // updated_atを元にDESCで降順に並べたあと、limitで件数制限をかける
    return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
