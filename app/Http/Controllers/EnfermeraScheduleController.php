<?php

namespace App\Http\Controllers;

use App\EnfermeraSchedule;
use Illuminate\Http\Request;
use App\User;
class EnfermeraScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware([
            'permission:enfermera.schedule.assign',
            'permission:enfermera.schedule.assignment'
            ]);
    }
    public function assign(User $user){
        $days = ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'];
        // $times = json_decode($user->hours(), true);
        // $times = $user->disable_times->value;
        // $disable_dates = $user->manual_disabled_dates();
        // $days_off = $user->days_off();
        return view('admin.enfermera.schedule', compact('user', 'days'));
    }
    public function assignment(Request $request, User $user, EnfermeraSchedule $enfermeraSchedule){
        $msj = [];
        $msj[0] = $enfermeraSchedule->disable_dates($request, $user);
        $msj[1] = $enfermeraSchedule->disable_work_days($request, $user);
        $msj[2] = $enfermeraSchedule->disable_hours($request, $user);
        return redirect()->route('enfermera.schedule.assign', $user)->with('flash', 'actualizado');
    }
}
