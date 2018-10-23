<?php
interface InterfaceDopravniProstredek
{
    public function vypisRokVyroby();
   
}

abstract class DopravniProstredek implements InterfaceDopravniProstredek
{
      public $rokVyroby;  
      public function __construct($rokVyroby)
    {
        $this->rokVyroby = $rokVyroby;
    }
    abstract public function vypisRokVyroby()
    {
        echo $this->rokVyroby;
    }
}

final class Auto extends DopravniProstredek
{
    public function __construct($rokVyroby)
    {
        parent::  __construct($rokVyroby);
    }
    
}

class Tramvaj extends DopravniProstredek
{
    public $pocetMistKeStani;
    
    public function vypisRokVyroby()
    {
        echo $this->rokVyroby;
    }
    public function vypisRokVyroby()
    {
        echo $this->rokVyroby;
    }
}

$skoda = new Auto(2001);
