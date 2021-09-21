<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\ApiBaseController as ApiBaseController;
use Illuminate\Http\Request;
use App\Http\Resources\RunnerResource as RunnerDataResource;

use App\Repositories\RunnerRepositoryInterface;

class RunnerController extends ApiBaseController
{
    private $runnerRepository;
    public function __construct(RunnerRepositoryInterface $runnerRepository)
    {
        $this->runnerRepository=$runnerRepository;
    }
    public function getRunnerFormDataByRunnerId($runnerId)
    {
        $runner= $this->runnerRepository->findRunnerDetailById($runnerId);
        if($runner){
            return $this->sendResponse(new RunnerDataResource($runner));
        }
        return $this->sendError("runner data not found");
    }
}
