<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;

class ProductSizeStock extends Model
{
    use HasFactory;

    // Relation
    public Function size()
    {
        return $this->belongsTo(Size::class);
    }
}