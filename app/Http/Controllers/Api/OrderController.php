<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function __construct()
    {
        // Setup konfigurasi Midtrans
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
        Config::$isSanitized = true;
        Config::$is3ds = true;
    }

    public function checkout(Request $request)
    {
        $request->validate([
            'total_price' => 'required|numeric',
        ]);

        // Buat ID Pesanan unik
        $orderId = 'PLAMO-' . uniqid();

        // 1. Simpan pesanan ke database kita (status masih pending)
        $order = Order::create([
            'order_id' => $orderId,
            'gross_amount' => $request->total_price,
            'payment_status' => 'pending'
        ]);

        // 2. Siapkan data untuk dikirim ke Midtrans
        $params = [
            'transaction_details' => [
                'order_id' => $orderId,
                'gross_amount' => $request->total_price,
            ],
            'customer_details' => [
                'first_name' => 'Gunpla',
                'last_name' => 'Builder',
                'email' => 'builder@example.com',
                'phone' => '081234567890',
            ],
        ];

        try {
            // 3. Minta Snap Token ke Midtrans
            $snapToken = Snap::getSnapToken($params);
            
            // Simpan tokennya di database (opsional tapi disarankan)
            $order->update(['snap_token' => $snapToken]);

            // 4. Kirim tokennya ke React
            return response()->json([
                'status' => 'success',
                'snap_token' => $snapToken,
                'order_id' => $orderId
            ]);
            
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => $e->getMessage()], 500);
        }
    }
}  