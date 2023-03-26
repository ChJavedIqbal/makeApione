<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\device;
class DeviceController extends Controller
{
    function list($id=null)
    {
        return $id?device::find($id):device::all();
    }
}
