<?php

namespace App\Models;

class BaseElement {
  private $title;
  public $description;

  public function __construct($title, $description) {
    $this->setTitle($title);
    $this->description = $description;
  }

  public function setTitle($titulo) {
    if($titulo == '') {
      $this->title = 'N/A';
    } else {
      $this->title = $titulo;
    }
  }

  public function getTitle() {
    return $this->title;
  }
}
