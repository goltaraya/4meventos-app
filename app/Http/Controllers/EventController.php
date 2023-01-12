<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $solicitante = 'Yago Alexandre';
        $evento = 'Apresentação dev4heart';
        $local = 'Auditório Sebrae';

        return view(
            'events.welcome',
            [
                'solicitante' => $solicitante,
                'evento' => $evento,
                'local' => $local
            ]
        );
    }

    public function create()
    {
        return view('events.create');
    }
}
