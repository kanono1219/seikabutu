<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
    'name',
    'overview',
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
    return $this->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
