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
        return Event::create($request->all());
    }

    public function getEvents()
    {
        $dateFrom = request('date_from');
        $dateTo = request('date_to');

        return Event::where('created_at', '>=', $dateFrom)
            ->where('created_at', '<=', $dateTo)
            ->get();
    }

    public function getEvent(int $id)
    {
        return Event::with(['camera', 'eventType'])->find($id);
    }
}
