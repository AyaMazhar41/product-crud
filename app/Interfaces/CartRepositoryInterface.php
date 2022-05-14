<?php
namespace App\Interfaces;
interface CartRepositoryInterface{
    public function addorder($request);
    public function getAllMyOrder();
}
