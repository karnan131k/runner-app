<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RunnerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //get race owners data fom runner data
        $ownersData =$this->race->owners;

        //get form data general from runner data
        $formdataGeneral = $this->formDataGeneral;

        // get form last runs data from runner data
        $formdataRunnerLastData = $this->runnersLastHistory->map(function($data){
            return app()->make('textMonthDateFormat')->runnerFormat($data);
        });
        /*
        return[
            'runner_name'=>$this->name,
            "age"=>$formdataGeneral->age,
            "sex"=>$formdataGeneral->sex,
            "color"=>$formdataGeneral->colour,
            "owners"=>$ownersData,
            "last_runs"=>$formdataRunnerLastData
        ];*/

        //Valid json response should looks like
        return [
            'runner_name'=>$this->name,
            "age"=>$formdataGeneral->age,
            "sex"=>$formdataGeneral->sex,
            "color"=>$formdataGeneral->colour,
            "last_runs"=>$formdataRunnerLastData
        ];
    }
}
