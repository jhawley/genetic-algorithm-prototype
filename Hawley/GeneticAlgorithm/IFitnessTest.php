<?php

namespace Hawley\IFitnessTest   ;

interface IFitnessTest {
    public function addStimulus(IStimulus $stimulus);
    public function simulate(IGenome $g);
}