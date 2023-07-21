<?php

namespace App\Http\Controllers;

use App\Http\Requests\CameraCreateRequest;
use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function createCamera(CameraCreateRequest $request)
    {
        return Camera::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'address' => $request['address'],
            'long' => $request['long'],
            'lat' => $request['lat'],
        ]);
    }
}
