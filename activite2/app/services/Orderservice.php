<?php 
 
namespace App\Services; 
 
class OrderService 
{ 
public function calculateTotal(array $items): float 
{ 
$total = 0; 
 
foreach ($items as $item) { 
$total += $item['price'] * $item['quantity']; 
} 
 
return $total; 
} 
} 