<?php


class Auto 
{
    private $rokVyroby;
    public $barvaAuta;
    
    public function __construct($rokVyroby, $barvaAuta)
    {
        $this->rokVyroby = $rokVyroby;
        $this->barvaAuta = $barvaAuta;
    }
    
    public function spocitejVek()
    {
      return $vek = $this->dnesniRok() - $this->rokVyroby;  
    }
    
    private function dnesniRok()
    {
       return date('Y'); 
    }
    
    public function nastavVek($novyVek)
    {
        $this->rokVyroby = $novyVek;
    }
}

$skodaFabia = new Auto(2001, 'bíla');
echo $skodaFabia->spocitejVek();
echo '<br>';
echo $skodaFabia->rokVyroby; //error - je to privat
?>
