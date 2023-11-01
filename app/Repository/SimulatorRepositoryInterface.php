<?php


namespace App\Repository;


interface SimulatorRepositoryInterface
{
    public function simulator($type);
    public function Enablesimulator();
    public function Disablesimulator();
}
