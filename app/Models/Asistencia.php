<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mienbro;

class Asistencia extends Model
{
    use HasFactory;

    protected $fillable = [
        'mienbro_id',
        'fecha',
        'asistio',
        'observacion'
    ];

    protected $casts = [
        'fecha' => 'date',
        'asistio' => 'boolean'
    ];

    public function mienbro()
    {
        return $this->belongsTo(Mienbro::class);
    }
}
