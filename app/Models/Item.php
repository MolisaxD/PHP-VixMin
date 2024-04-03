<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Item extends Model
{
    public $timestamps = false;

    protected $primaryKey = 'id_item';
    protected $table = 'itens';
    protected $fillable = ['nome', 'descricao', 'valor', 'tipo_pedido'];
    use HasFactory;

    public function servico() {
        
        return $this->hasOne(Servico::class, 'id_servico', 'id_item');
    }
}
