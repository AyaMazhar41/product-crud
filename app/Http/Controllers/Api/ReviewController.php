<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Interfaces\ReviewRepositoryInterface;
use App\Http\Requests\Api\ReviewStore;
use  App\Http\Resources\ReviewResource;
class ReviewController extends Controller
{
    public function store(ReviewRepositoryInterface $ReviewRepositoryInterface,ReviewStore $request)
    {
        $review = $ReviewRepositoryInterface->AddReview($request->validated());
        return \responder::success (new ReviewResource($review) );
    }
}
