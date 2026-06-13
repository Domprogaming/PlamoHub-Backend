<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Gunpla;

class GunplaController extends Controller
{
    public function index() {
        return response()->json(Gunpla::all());
    }
}