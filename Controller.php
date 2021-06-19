<?php 

interface Controller {

    public function allTasks();
    public function concluded(); //concluído
    public function notConcluded(); //não concluído
    public function overdue(); //atasado
    public function activate(); //ativar
    public function disable(); //desativar

}