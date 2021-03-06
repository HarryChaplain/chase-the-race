<?php
class UserManager {
  private $db;

  public function __construct(PDO $db = null) {
    $this->db = $db;
  }

  public function insertUser($email, $ip, $domain, $date) {
    $stmt = $this->db->prepare("
      insert into Users (email, domain, date_created, ip)
      values (:email, :domain, :date_created, :ip)");

    $r = $stmt->execute([
      'email' => $email,
      'ip' => $ip,
      'domain' => $domain,
      'date_created' => $date
    ]);
  }
  public function byEmail($email) {
    $r = $this->db->prepare(
      "select id, email, domain, date_created, ip
      from Users
      where email = :email");
    $r->execute(['email' => $email]);

    $users = [];

    // var_dump($obj);
    foreach ($r as $row){
      //var_dump($row);
      $user = new User();
      $user->fromArray($row);
      $users[] = array_push($users, $user);
    }
    //echo $users[0]->id;
    return $users[0];
  }

}

?>
