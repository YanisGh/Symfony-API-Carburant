<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\EmbeddedDocument]
class Prix {
    #[MongoDB\Field(type: 'collection')]
    private array $geom =[];

    #[MongoDB\Field(type:'string')]
    private $reg_name;

    public function getGeom(): array {
        return $this->geom;
    }

    public function setGeom(array $geom): void{
        $this->geom = $geom;
    }

    public function getRegName(){
        return $this->reg_name;
    }

    public function setRegName($reg_name): void{
        $this->reg_name = $reg_name;
    }
}