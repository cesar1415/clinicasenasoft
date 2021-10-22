<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'date',
        'enfermera_id',
        'status',
        'user_id',
        'invoice_id',
    ];
    protected $dates = ['date'];
    public function invoice(){
        return $this->belongsTo('App\Invoice');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
    // recuperar informacion
    public function enfermera(){
        $enfermera = User::find($this->enfermera_id);
        return $enfermera;
    }
    public function status(){
        switch ($this->status) {
            case 'pending':
                return 'Pendiente';
            break;
            case 'done':
                return 'Terminado';
            break;
            case 'cancelled':
                return 'Cancelado';
            break;
            default:
                # code...
            break;
        }
    }
}
