<?php
namespace App\Repositories;
 use App\Interfaces\ReviewRepositoryInterface;
use App\Models\Review;

class ReviewRepository implements ReviewRepositoryInterface{
    public function AddReview($request){
        $rule = $request;
        $rule['model_type'] = 'App\Models'.'\\'.$rule['type'];
        $rule['user_id'] = auth()->id();
        $review = Review::create($rule);
        return $review;
    }




}
