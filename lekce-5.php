<?php

class Auto 
{
    public $rokVyroby;
    public $barvaAuta;
    
    public function __construct($rokVyroby, $barvaAuta)
    {
        $this->rokVyroby = $rokVyroby;
        $this->barvaAuta = $barvaAuta;
    }
    
    public function spocitejVek()
    {
      return $vek = date('Y') - $this->rokVyroby;  
    }
    
    public function nastavVek($novyVek)
    {
        $this->rokVyroby = $novyVek;
    }
}

$skodaFabia = new Auto(2001, 'bíla');
echo $skodaFabia->spocitejVek();

$skodaFabia->rokVyroby;

/*
$skodaFabia = [
    'rokVyroby' => 2001,
    'barva'=> 'bíla'
];

$josef = [
'rokNarozeni'=> 1985
];

function spocitejVek($auto) {
    return $vek = date('Y') - $auto['rokVyroby'];
}

echo spocitejVek($skodaFabia);
echo spocitejVek($josef);*/
