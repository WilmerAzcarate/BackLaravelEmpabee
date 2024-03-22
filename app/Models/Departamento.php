<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departamento extends Model
{
    use HasFactory;
    protected $table = "departamentos";
    protected $guarded = [];

    public function pais():BelongsTo
    {
        return $this->belongsTo(Pais::class,'pais_id');
    }

    public function municipios():HasMany
    {
        return $this->hasMany(Municipios::class,'departamento_id');
    }
}
