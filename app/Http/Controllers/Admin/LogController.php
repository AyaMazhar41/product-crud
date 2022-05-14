<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\LogRepositoryInterface;
class LogController extends Controller
{
   public function index(LogRepositoryInterface $LogRepositoryInterface)
   {
    $activities = $LogRepositoryInterface->GetAllProductsActivities();
    return view('admin.logs.index',['activities'=>$activities]);
   }
}
