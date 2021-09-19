<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\ApiBaseController as ApiBaseController;
use Illuminate\Http\Request;
use App\Http\Resources\RunnerResource as RunnerDataResource;
use App\Models\TbmRunner;

class RunnerController extends ApiBaseController
{
    public function getRunnerFormDataByRunnerId($runnerId)
    {
        //dd($runnerId);
        $runner= TbmRunner::find($runnerId);
        if($runner){
            return $this->sendResponse(new RunnerDataResource($runner));
        }
        return $this->sendError("runner data not found");
    }
}
