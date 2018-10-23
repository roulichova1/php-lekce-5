<?php

interface TrojrozmernyObrazec
{
   public function ziskejObjem();
   public function ziskejPovrch();
}

class Krychle implements TrojrozmernyObrazec
{
   public $a;
   public function __construct($a)
   {
       $this->a = $a;
   }
   public function ziskejObjem()
   {
       return pow($this->a, 3);
   }
   public function ziskejPovrch()
   {
       return 6*(pow($this->a, 2));
   }
}

class Kvadr implements TrojrozmernyObrazec
{
   public $a;
   public $b;
   public $c;
   public function __construct($a, $b, $c)
   {
       $this->a = $a;
       $this->b = $b;
       $this->c = $c;
   }
   public function ziskejObjem()
   {
       return $this->a * $this->b * $this->c;
   }
   public function ziskejPovrch()
   {
       return 2*(($this->a * $this->b)+($this->a * $this->c)+($this->b * $this->c));
   }
 
}

class Koule implements TrojrozmernyObrazec
{
   public $r;
   public function __construct($r)
   {
       $this->r = $r;
   }
   public function ziskejObjem()
   {
       $d = $this->r * 2;
       return (pow($d, 3) * pi())/6;
   }
   public function ziskejPovrch()
   {
        $d = $this->r * 2;
       return pi() * pow($d, 2);
   }  
}

class Jehlan implements TrojrozmernyObrazec
{
   public $a;
   public $v;
   public function __construct($a, $v)
   {
       $this->a = $a;
       $this->v = $v;
   }
   public function ziskejObjem()
   {
       return (pow($this->a, 2) * $this->v)/3;
   }
   public function ziskejPovrch()
   {
       $sPO = pow($this->a, 2);
       $vA = sqrt(pow($this->a / 2, 2) + pow($this->v, 2));
       $sPL = (($this->a / 2) * $vA) * 4;
       return $sPO + $sPL;
   } 
}

$krychle = new Krychle(5);
$kvadr = new Kvadr(2, 3, 7);
$koule = new Koule(6);
$jehlan = new Jehlan(3, 4);

function vypis(TrojrozmernyObrazec $obrazec)
{
    echo get_class($obrazec).' má objem '.$obrazec->ziskejObjem().'<br>';
    echo get_class($obrazec).' má povrch '.$obrazec->ziskejPovrch().'<br>';
}

vypis($krychle);
vypis($kvadr);
vypis($koule);
vypis($jehlan);