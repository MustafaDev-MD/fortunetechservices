<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAssessment;
use App\Http\Resources\AssessmentResource;

class AssessmentController extends Controller
{
    public function show()
    {
        $assessments = UserAssessment::with('user')->latest()->get();
        return AssessmentResource::collection($assessments);
    }
}
