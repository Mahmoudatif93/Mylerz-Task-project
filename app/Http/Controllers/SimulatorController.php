<?php

namespace App\Http\Controllers;

use App\Repository\SimulatorRepositoryInterface;
use Illuminate\Http\Request;

class SimulatorController extends Controller
{
    protected $SimulatorRepository;

    public function __construct(SimulatorRepositoryInterface $SimulatorRepository)
    {
        $this->SimulatorRepository = $SimulatorRepository;
    }


    public function simulator($type)
    {
        return $this->SimulatorRepository->simulator($type);
    }


    public function Enablesimulator()
    {
        return $this->SimulatorRepository->Enablesimulator();
    }
    public function Disablesimulator()
    {
        return $this->SimulatorRepository->Disablesimulator();
    }
}
