<?php
class Project{
   private $title;
   private $dailyRate;
   private $tasks;
   public function __construct($title,$dailyRate,$tasks)
   {
    $this->title=$title;
    $this->dailyRate=$dailyRate;
    $this->tasks=$tasks;
   }
    public function addTask(Task $task){

    }
    public function getTasks(){

    }
    public function calculateTotalHours(){

    }
     public function calculateTotalWithBuffer(){
        
     }
      public function calculateBudget(){

      }
      public function getBigTasks($threshold){

      }
   
}
// }class Project { private $title; private $dailyRate; private $tasks = []; } 
// •   → Task : constructeur + getters + méthode isBig($threshold) qui retourne 
// true si estimatedHours > $threshold 
// •   → Project : constructeur + addTask(Task $task) + getter $tasks 
// •   → Project : calculateTotalHours() — somme des heures de toutes les 
// tâches 
// •   → Project : calculateTotalWithBuffer($bufferPercent = 10) — total * (1 + 
// buffer/100) 
// •   → Project : calculateBudget() — totalHeures * dailyRate / 8  (taux 
// journalier / 8h) 
// •   → Project : getBigTasks($threshold) — retourne un tableau des tâches 
// dont isBig() est true 