<?php

namespace App\Http\Controllers;

use App\Http\Requests\CameraCreateRequest;
use App\Models\Camera;
use Illuminate\Http\Request;

class CameraController extends Controller
{
    public function createCamera(CameraCreateRequest $request): Camera
    {
        return Camera::create($request->all());
    }
}
