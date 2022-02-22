<?php
namespace Luc\Tuto;

class Inspire{
    public $tab=[
        "composer c'est super",
        "composer c'est à chier",
        "..sans commentaire"

    ];
    public function __construct(){}

    public function displayTab(){
        return $this->tab[rand(0,count($this->tab)-1)];
    }

}
