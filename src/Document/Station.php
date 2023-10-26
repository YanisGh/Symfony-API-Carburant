<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Station {
    #[MongoDB\Id]
    protected $id;

    #[MongoDB\EmbedOne(targetDocument: Prix::class)]
    private $fields;

    public function getId(): string{
        return $this->id;
    }

    public function getFields(){
        return $this->fields;
    }

    public function setId(string $îd): void {
        $this->id = $id;
    }
    public function setFields(array $fields): void {
        $this->fields = $fields;
    }
}