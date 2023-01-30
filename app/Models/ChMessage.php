<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ChMessage extends Model
{
    //

    public function created_at_diff_for_humans(){
        Carbon::setLocale(App::getLocale());
        $created_at = Carbon::parse($this->attributes['created_at']);
        return $created_at->diffForHumans();
    }
}
