<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\GetEventsRequest;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function createEvent(EventCreateRequest $request): Event
    {
        return Event::create([
            'camera_id' => $request['camera_id'],
            'event_type_id' => $request['event_type_id'],
            'frame_url' => $request['frame_url'],
        ]);
    }

    public function getEvents(Request $request)
    {
        $date_from = $request->input('date_from');
        $date_to = $request->input('date_to');

        if ($date_from > $date_to) {
            return 'dates are invalid';
        }

        return Event::where('creationDate', '>=', $date_from)->
            where('creationDate', '<=', $date_to)->
            get();
    }

    public function getEvent(int $id)
    {
        return Event::with(['camera', 'eventType'])->find($id);
    }
}
