<?php

namespace App\Http\Controllers\Step\Update;

use App\Http\Controllers\Controller;
use App\Models\Step;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Illuminate\Http\Request;

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
        $stepId = (int) $request->route('stepId');
        $step = Step::where('id', $stepId)->firstOrFail();
        return view('step.update')->with('step', $step);
    }
}
