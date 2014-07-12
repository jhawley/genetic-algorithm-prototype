<?php

namespace Hawley\IGenome;

interface IGenome {
    public function addChromosome(IChromosome $chromosome);
    public function mutate();
    public function getSize();
    public function getChromosome($id);
}