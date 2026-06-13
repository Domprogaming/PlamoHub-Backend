<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index() {
        // Mengirim data backlog beserta detail gunpla-nya
        return response()->json(Inventory::with('gunpla')->get());
    }

    public function store(Request $request) {
        $inventory = Inventory::create([
            'gunpla_id' => $request->gunpla_id,
            'status' => $request->status ?? 'Backlog'
        ]);
        return response()->json($inventory);
    }

    public function update(Request $request, $id) {
        $inventory = Inventory::findOrFail($id);
        $inventory->update(['status' => $request->status]);
        return response()->json($inventory);
    }

    public function destroy($id) {
        Inventory::destroy($id);
        return response()->json(['message' => 'Deleted']);
    }
}