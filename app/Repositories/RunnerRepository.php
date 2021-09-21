<?php
namespace App\Repositories;

use App\Models\TbmRunner;

class RunnerRepository implements RunnerRepositoryInterface{

    public function findRunnerDetailById($id)
    {
        return TbmRunner::findOrfail($id);
    }
}