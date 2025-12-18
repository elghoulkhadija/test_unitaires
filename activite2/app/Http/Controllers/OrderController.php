<?php 
 
namespace App\Http\Controllers; 
 
use App\Services\OrderService; 
use Illuminate\Http\Request; 
 
class OrderController extends Controller 
{ 
    public function total(Request $request, OrderService $orderService) 
    { 
        $items = $request->input('items'); 
        $total = $orderService->calculateTotal($items); 
        
        return response()->json([ 
        'total' => $total 
        ]); 
    } 
} 