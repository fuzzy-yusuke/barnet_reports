<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class FormType extends Model
{
    public function question()
    {
        //
        return $this->HasMany('App\Question');
    }
}
