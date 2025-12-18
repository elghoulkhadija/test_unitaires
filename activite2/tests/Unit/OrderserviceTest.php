<?php 
 
namespace Tests\Unit; 
 
use App\Services\OrderService; 
use PHPUnit\Framework\TestCase; 
 
class OrderServiceTest extends TestCase 
{ 
    public function test_calculate_total_of_order() 
    { 
        $service = new OrderService(); 
        
        $items = [ 
        ['price' => 100, 'quantity' => 2], 
        ['price' => 50, 'quantity' => 1] 
        ]; 
        
        $total = $service->calculateTotal($items); 
        
        $this->assertEquals(250, $total); 
    } 
}