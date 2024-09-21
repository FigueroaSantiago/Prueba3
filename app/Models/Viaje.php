<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Viaje
 *
 * @property $id
 * @property $titulo
 * @property $descripcion
 * @property $precio
 * @property $fechaSalida
 * @property $fechaLlegada
 * @property $img
 * @property $pdf
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Viaje extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['titulo', 'descripcion', 'precio', 'fechaSalida', 'fechaLlegada', 'img', 'pdf'];


}
