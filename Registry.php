<?php

require_once("Task.php");

class Registry extends Task {

    private $priority;
    private $responsible;

    private function getPriority(){
        return $this->priority;
    }
    private function setPriority($priority){
        $this->priority = $priority;
    }
    private function getResponsible(){
        return $this->responsible;
    }
    private function setResponsible($responsible){
        $this->responsible = $responsible;
    }


    public function priorityDegree($priority){
        $this->setPriority($priority);
        echo("<p> Prioridade " . $this->getPriority() . " definida.</p>");
    }


    public function nameResponsible($responsible){
        $this->setResponsible($responsible);
        echo("<p> " . $this->getResponsible() . " definido como responsável.</p>");
    }


}