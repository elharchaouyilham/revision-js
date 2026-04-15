
<?php
class task{
 private $id;
 private $description; 
 private $estimatedHours;
 public function __construct($id, $description,$estimatedHours)
 {
  $this->id=$id;
  $this->description=$description;
  $this->estimatedHours=$estimatedHours;

 }
 public function getId(){
    return $this->id;
 }
 public function getDescription(){
    return $this->description ;
 }
 public function getEstimatedHours(){
    return  $this->estimatedHours;
 }
 public function isBig($threshold){
   if( $this->estimatedHours > $threshold ){
    return true;
   }
   else false;
 }

}
// . Créez la classe Task avec ses 3 attributs private, son constructeur, ses getters et la 
// méthode isBig($threshold) 
// 2. Créez la classe Project avec $title, $dailyRate (taux journalier), $tasks (tableau vide par 
// défaut) 
// 3. Implémentez addTask(Task $task) : ajoute la tâche au tableau $tasks 
// 4. Implémentez calculateTotalHours() : parcourt $tasks avec foreach et additionne les 
// heures 
// 5. Implémentez calculateTotalWithBuffer($bufferPercent = 10) : retourne les heures + la 
// marge en % 
// 6. Implémentez calculateBudget() : heures totales avec buffer × (dailyRate / 8) 
// 7. Implémentez getBigTasks($threshold) : retourne un tableau filtré des tâches dépassant 
// le seuil 
// 8. Testez avec un projet 'Refonte site web' (600€/jour), 3 tâches : 'Design' 12h, 'Dev front' 
// 30h, 'Dev back' 45h 
// 9. Affichez : total heures sans buffer, total avec 10% buffer, budget estimé, tâches > 20h 