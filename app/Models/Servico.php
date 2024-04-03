<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Servico extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_servico';
    protected $table = 'servicos';
    protected $foreignKey = 'id_item';
    protected $fillable = ['provedor','id_item'];
    use HasFactory;

    public function item() 
    {
        return $this->belongsTo(Item::class, 'id_item', 'id_servico');
    }
}
