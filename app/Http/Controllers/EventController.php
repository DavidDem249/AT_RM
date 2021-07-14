<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EventList;

class EventController extends Controller
{
    // public function index()
    // {
    // 	return View('pages.events.create');
    // }


    public function calendarEvents(Request $request)
    {
        $eventList = EventList::get(['event_name','event_start']);
        return response()->json(["My events" => $eventList]);
    }

}
