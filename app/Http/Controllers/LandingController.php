<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LandingController extends Controller
{
    public function index()
    {
        // Data editable (sucursales / contacto) basada en el PDF
        $branches = [
            ['name' => 'Insurgentes', 'slug' => 'insurgentes'],
            ['name' => 'Otay',        'slug' => 'otay'],
            ['name' => 'Centro',      'slug' => 'centro'],
            ['name' => 'Playas',      'slug' => 'playas'],
        ];

        $contact = [
            'phone_display' => '664-731-4805',
            'phone_link'    => '526647314805',
            'email'         => 'elbuenpie.tijuana@gmail.com',
            'address'       => 'Av de los Insurgentes 17017-Local 5, Los Alamos, 22110 Tijuana, B.C.',
            'hours'         => [
                'Lunes a Viernes: 10:00 AM a 7:00 PM',
                'Sábados: 9:00 AM a 4:00 PM',
            ],
            'whatsapp_link' => 'https://wa.me/526647314805',
        ];

        return view('landing', compact('branches', 'contact'));
    }

    public function submit(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nombre'   => ['required','string','max:120'],
            'correo'   => ['required','email','max:160'],
            'telefono' => ['required','string','max:40'],
            'motivo'   => ['nullable','string','max:120'],
            'opcion'   => ['required','in:Solicitar información,Agendar cita,Consultar promociones,Otros'],
            'mensaje'  => ['nullable','string','max:2000'],
        ], [
            'opcion.required' => 'Seleccioná una opción.',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        // En esta versión lo guardamos en sesión (sin DB).
        // Si querés, lo conecto a DB + envío de email.
        return back()->with('ok', '¡Gracias! Recibimos tu consulta. Te contactaremos a la brevedad.')
                     ->withInput([]);
    }
}
