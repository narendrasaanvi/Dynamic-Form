<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormField extends Model
{
    protected $casts = ['options' => 'array'];
    protected $fillable = ['form_id', 'label', 'name', 'type', 'options', 'required'];

    public function form() {
        return $this->belongsTo(Form::class);
    }
}
