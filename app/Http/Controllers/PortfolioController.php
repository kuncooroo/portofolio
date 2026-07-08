<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Certificate;

class PortfolioController extends Controller
{
    public function index()
    {

        $projects = Project::latest()->get();

        $certificates = Certificate::latest()->get();

        return view('portfolio.index', compact(
            'setting',
            'projects',
            'certificates'
        ));
    }
}
