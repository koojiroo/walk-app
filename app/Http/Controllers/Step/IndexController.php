<?php

namespace App\Http\Controllers\Step;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Step;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $steps = Step::all();
        return view('step.index')
            ->with('steps', $steps);
    }
}
