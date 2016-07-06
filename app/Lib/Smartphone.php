<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 06.07.2016
 * Time: 14:20
 */

namespace App\Lib;


class Smartphone
{
    protected $name;
    protected $processor_name;
    protected $cores;
    protected $display;
    protected $camera;
    protected $battery;

    public function __construct($n, $p_n, $cor, $d, $c, $b)
    {
        $this->name = $n;
        $this->processor_name = $p_n;
        $this->cores = $cor;
        $this->display = $d;
        $this->camera = $c;
        $this->battery = $b;
    }

    public function __toString()
    {
        return $this->name . ", " . $this->processor_name . ", ". $this->cores . " cores, ". $this->display . " display, " . $this->camera . " megapixels camera, battery capacity " .$this->battery. " mAh";
    }
}