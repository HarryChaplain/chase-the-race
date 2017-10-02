<?php
class PredictionManager {
  private $db;
  public function __construct(PDO $db = null){
    $this->db = $db;
  }

  public function save(Prediction $pred){
    if (isset($pred->id)){
      return $this->update($pred);
    }
    $stmt = $this->db->prepare("
        insert into Prediction (user_id, prediction)
        values(:uid, :pred)
    ");

    $r = $stmt->execute([
        'uid'  => $pred->user_id,
        'pred' => $pred->prediction,
    ]);
    $bp->id = $this->db->lastInsertId();
  }
}
?>