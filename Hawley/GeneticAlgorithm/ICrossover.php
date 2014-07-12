<?php

namespace Hawley\ICrossover;

interface ICrossover {
    public function combine(IChromosome $c1, IChromosome $c2);
}