<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;


class Chidour extends Model
{
    use HasFactory, Commentable;

    protected $fillable = [
        'origine',
        'cible',
        'chatrane',
        'fini',
        'marie',
        'motif',
        'chatrane_origine',
        'acceptation_origine',
        'acceptation_cible'
    ];

    public function origine_user(){
        return $this->belongsTo(User::class, 'origine', 'id');
    }


    public function cible_user(){
        return $this->belongsTo(User::class, 'cible', 'id');
    }


    public function chatrane_user(){
        return $this->belongsTo(User::class, 'chatrane', 'id');
    }
}
