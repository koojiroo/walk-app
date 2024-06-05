<?php

namespace App\Http\Controllers\Step;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step\CreateRequest;
use App\Models\Step;

class CreateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(CreateRequest $request)
    {
        $step = new Step;
        $step->steps_count = $request->step();
        $step->save();
        return redirect()->route('step.index');
    }
}
