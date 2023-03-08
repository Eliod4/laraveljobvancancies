<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producting extends Model
{
    use HasFactory;

    public function scopefilter($query ,array $filter){
        if($filter['tagi'] ?? false){
            $query->where('tags','like','%'.request('tagi').'%');
        }
        if($filter['search'] ?? false){
            $query->where('title','like','%'.request('search').'%')
            ->orwhere('description','like','%'.request('search').'%')
            ->orwhere('tags','like','%'.request('search').'%')
            ->orwhere('company','like','%'.request('search').'%');

        }
        
    }
    public function user(){
       return    $this->belongsTo(User::class,'user_id');
    }

}
