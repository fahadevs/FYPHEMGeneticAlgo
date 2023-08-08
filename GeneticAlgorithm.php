<?php
use PHPExperts\GAO\Solution;
use PHPExperts\GAO\Breeder;
use PHPExperts\GAO\Population;
class MySolution extends Solution
{
    public function genome()
    {
        return [
            ['char', 'ElectricMotor'],
            ['float', 0, 1], // upper and lower bounds
            ['integer', -100, 100],
        ];
    }

    public function evaluate($data = null)
    {
        // The smaller the fitness value, the better.
        $this->fitness = (ord($this->chromosomes[0]) + $this->chromosomes[2]) / $this->chromosomes[1];
    }
    
    $optimiser = new Breeder(new Population(MySolution::class, 100));
    $optimiser->run();
    foreach ($optimiser->results as $solution)
        {
            print_r($solution->summary());
        }
}

?>