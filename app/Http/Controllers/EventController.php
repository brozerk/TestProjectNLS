<?php

namespace App\Http\Controllers;

use App\Http\Requests\EventCreateRequest;
use App\Http\Requests\GetEventsRequest;
use App\Models\Event;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function createEvent(EventCreateRequest $request): Event
    {
        return Event::create($request->all());
    }

    public function getEvents(GetEventsRequest $request)
    {
//        $dateFrom = request('date_from');
//        $dateTo = request('date_to');

        $dateFrom = $request->get('date_from');
        $dateTo = $request->get('date_to');

        return Event::where('created_at', '>=', $dateFrom)
            ->where('created_at', '<=', $dateTo)
            ->get();
    }

    public function getEvent(int $id)
    {
        $event = Event::with(['camera', 'eventType'])->find($id);

        if ($event) {
            return $event;
        }
        return response('event not found', 404);
    }
}
