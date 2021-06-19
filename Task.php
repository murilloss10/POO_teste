<?php

require_once('Controller.php');

class Task implements Controller {

    private $id;
    private $name;
    private $description ;
    private $active;
    private $overdue;
    private $concluded;

    public function __construct($name, $description) {
        $this->setId(0);
        $this->setName($name);
        $this->setDescription($description);
        $this->setActive(true);
        $this->setOverdue(false);
        $this->setConcluded(false);
    }

    private function getId(){
        return $this->id;
    }
    private function setId($id){
        $this->id = $id;
    }
    private function getName(){
        return $this->name;
    }
    private function setName($name){
        $this->name = $name;
    }
    private function getDescription(){
        return $this->description;
    }
    private function setDescription($description){
        $this->description = $description;
    }
    private function getActive(){
        return $this->active;
    }
    private function setActive($active){
        $this->active = $active;
    }
    private function getOverdue(){
        return $this->overdue;
    }
    private function setOverdue($overdue){
        $this->overdue = $overdue;
    }
    private function getConcluded(){
        return $this->concluded;
    }
    private function setConcluded($concluded){
        $this->concluded = $concluded;
    }


    public function allTasks(){
        echo("<h3>TAREFAS</h3>");
        echo("<p>Id: " . $this->getId() . "</p>");
        echo("<p>Nome: " . $this->getName() . "</p>");
        echo("<p>Descrição: " . $this->getDescription() . "</p>");
        echo("<p>Ativado: " . ($this->getActive()?"Sim":"Não") . "</p>");
        echo("<p>Atrasado: " . ($this->getOverdue()?"Sim":"Não") . "</p>");
        echo("<p>Concluído: " . ($this->getConcluded()?"Sim":"Não") . "</p><hr>");
    }


    public function concluded(){
        if($this->getOverdue()){
            $this->setOverdue(false);
        }
        $this->setConcluded(true);
        echo("<p>" . $this->getName() . " concluída.</p>");
    }


    public function notConcluded(){
        $this->setConcluded(false);
        echo("<p>" . $this->getName() . " não concluída.</p>");
    }


    public function overdue(){
        $this->setOverdue(true);
        echo("<p>" . $this->getName() . " atrasada.</p>");
    }


    public function activate(){
        $this->setActive(true);
        echo("<p>" . $this->getName() . " ativada.</p>");
    }


    public function disable(){
        $this->setActive(false);
        echo("<p>" . $this->getName() . " desativada.</p>");
    }


}



