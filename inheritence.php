<?php
class Calisanlar{
    public $maas;
    public $adsoyad;

    public function adsoyad($adsoyad){
        $this->adsoyad = $adsoyad;
    }
    public function maas($maas){
        $this->maas = $maas;
    }
    public function senelikMaas(){
        return $this->maas * 12;
    }
}
class Muhasebe extends Calisanlar {}
class IT extends Calisanlar{
    public function senelikMaas(){
        return 'it sinifi guncelendi '.$this->adsoyad.' seneleikmaas '.parent::senelikMaas()+2000;
    }
}


$muhasebe= new Muhasebe;
$it = new IT;

$muhasebe->adsoyad('ar** tu** ');
$muhasebe->maas(4000);
echo 'Muhasebe senelik maas >'.$muhasebe->senelikMaas().PHP_EOL;

$it->adsoyad('ayberk catal');
$it->maas(8000);
echo $it->senelikMaas();



?>