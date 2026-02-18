<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function digitalGrowth() { return view('services.digital-growth'); }
    public function creativeAnimation() { return view('services.creative-animation'); }
    public function itDevelopment() { return view('services.it-development'); }
    public function bpoOperations() { return view('services.bpo-operations'); }
    public function digitalForensics() { return view('services.digital-forensics-assurance'); }
}
