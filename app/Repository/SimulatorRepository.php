<?php

namespace App\Repository;

use Illuminate\Support\Facades\Artisan;

class SimulatorRepository implements SimulatorRepositoryInterface
{
    public function simulator($type)
    {
        if ($type == 'true') {
            $this->Enablesimulator();
        }
        if ($type == 'false') {
            $this->Disablesimulator();
        }
    }
    public function Enablesimulator()
    {
        $exitCode = Artisan::call('iot:generate-data'); /// to run Job iot:generate-data
        if ($exitCode === 0) {
            return 'Schedule run successfully!';
        } else {
            return 'Schedule run failed. Check your logs for details.';
        }
    }

    public function Disablesimulator()
    {
        $exitCode = Artisan::call('queue:flush'); //clear all of the failed and pending jobs
        return 'Scheduled tasks is Cancelled';
    }
}
