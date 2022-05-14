<?php
namespace App\Repositories;
 use App\Interfaces\LogRepositoryInterface;
 use Spatie\Activitylog\Models\Activity;

class LogRepository implements LogRepositoryInterface{

    public function GetAllProductsActivities(){
       return  Activity::get();
    }

}
