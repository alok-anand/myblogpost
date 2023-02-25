<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Blogs extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
	
	protected $table = 'canam_articles';
	protected $primaryKey = 'a_id';
    
	public function getAllActiveBlog(){
       return $this->has('blogsCategories')->with('blogsCategories')->where('status', 1)->get();   
    }
	
    public function blogsCategories()
    {
        return $this->belongsTo(Blogscategory::class,'acat', 'cat_id')->where('status','active');
        //return $this->hasMany(Blogscategory::class, 'cat_id','acat')->where('status', 'active');
    }
	
}
