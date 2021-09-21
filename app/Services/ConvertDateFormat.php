<?php
namespace App\Services;
class ConvertDateFormat{
    
    public function convertDateDesiredFormat($date)
    {
        return date('d-M-y',strtotime($date));
    }
    public function runnerFormat($runner)
    {
        return[
            "id"                => $runner->id,
            "runner_id"         => $runner->runner_id,
            "score"             => $runner->score,
            "place"             => $runner->place,
            "pariticipate_at"   => $this->convertDateDesiredFormat($runner->pariticipate_at),
            "condition"         => $runner->condition,
            "price"             => $runner->price,
        ];
    }
}