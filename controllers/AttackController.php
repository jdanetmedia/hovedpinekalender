<?php

require('controllers/DbController.php');

class AttackController {

  public function addAttack($attack) {
    try {
      $conn = DbController::connect();

      $handle = $conn->prepare("INSERT INTO attack (user_id, attack_date, attack_start, attack_end, attack_strength, attack_medication, attack_side)
                                VALUES (:user_id, :attack_date, :attack_start, :attack_end, :attack_strength, :attack_medication, :attack_side)");
      $handle->bindParam(':user_id', $attack['user_id']);
      $handle->bindParam(':attack_date', $attack['attack_date']);
      $handle->bindParam(':attack_start', $attack['attack_start']);
      $handle->bindParam(':attack_end', $attack['attack_end']);
      $handle->bindParam(':attack_strength', $attack['attack_strength']);
      $handle->bindParam(':attack_medication', $attack['attack_medication']);
      $handle->bindParam(':attack_side', $attack['attack_side']);

      $handle->execute();
    }
    catch(\PDOException $ex) {
      print($ex->getMessage());
    }
  }

  public function getAllAttacks($user_id) {
    try {
      $conn = DbController::connect();

      $handle = $conn->prepare("SELECT * FROM attack WHERE user_id = :user_id");
      $handle->bindParam(':user_id', $user_id);

      $handle->execute();

      $result = $handle->fetchAll( \PDO::FETCH_ASSOC );
      return $result;
    }
    catch(\PDOException $ex) {
      print($ex->getMessage());
    }
  }

}
