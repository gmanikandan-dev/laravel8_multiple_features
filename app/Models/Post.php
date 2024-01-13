<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\InteractsWithMedia;


  
class Post extends Model implements HasMedia
{
 use HasMediaTrait,HasFactory;
  
    protected $fillable = [
        'title',
        'body',
    ];
}