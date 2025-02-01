<?php

require_once('Tools.php');


class Jokes {

  private $pdo;
  private $tools;

  function __construct() {
    $this->tools = new Tools();
    error_reporting($this->tools->errorReport());
    try {
      $this->pdo = $this->tools->getSQLInfo();
    } catch(PDOException $e) {
      print("Det skjedde noe feil");
    }
  }

  function getJoke($grov, $type, $lengde, $except) {
    $query = 0;
    $exists = false;

    try {
      if($type != 6) {
        if($grov == 0 && $type == 0 && $lengde == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE id!=:except ORDER BY RAND() LIMIT 1");
        }

        else if($grov == 0 && $type == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE lengde=:lengde AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":lengde", $lengde);
        }

        else if($grov == 0 && $lengde == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE type=:type AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":type", $type);
        }

        else if($type == 0 && $lengde == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE grov=:grov AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":grov", $grov);
        }

        else if($grov == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE type=:type AND id!=:except AND lengde=:lengde ORDER BY RAND() LIMIT 1");
          $query->bindValue(":type", $type);
          $query->bindValue(":lengde", $lengde);
        }

        else if($type == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE grov=:grov AND lengde=:lengde AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":grov", $grov);
          $query->bindValue(":lengde", $lengde);
        }

        else if($lengde == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE grov=:grov AND type=:type AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":grov", $grov);
          $query->bindValue(":type", $type);
        }

        else {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE grov=:grov AND type=:type AND lengde=:lengde AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":grov", $grov);
          $query->bindValue(":type", $type);
          $query->bindValue(":lengde", $lengde);
        }
      }

      else {
        if($grov == 0 && $lengde == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE type!=4 AND type!=2 AND id!=:except ORDER BY RAND() LIMIT 1");
        }

        else if($grov == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE type!=4 AND type!=2 AND id!=:except AND lengde=:lengde ORDER BY RAND() LIMIT 1");
          $query->bindValue(":lengde", $lengde);
        }

        else if($lengde == 0) {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE grov=:grov AND type!=4 AND type!=2 AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":grov", $grov);
        }

        else {
          $query = $this->pdo->prepare("SELECT id, content FROM vitser WHERE grov=:grov AND type!=4 AND type!=2 AND lengde=:lengde AND id!=:except ORDER BY RAND() LIMIT 1");
          $query->bindValue(":grov", $grov);
          $query->bindValue(":lengde", $lengde);
        }
      }


      $query->bindValue(":except", $except);

      $query->execute();

      $result = $query->fetch(PDO::FETCH_ASSOC);

      if(isset($result["content"])) {
        return $result;
      }

      else {
        $errorArray = [];
        $errorArray['id'] = 0;
        $errorArray['content'] = "Ingen vitser med dine kriterier.";
        return $errorArray;
      }
    }
    catch(Exception $e) {
      print("Noe gikk galt. Prøv igjen.");
    }
  }

  function incrementNumberOfGens() {
    $query = $this->pdo->prepare("UPDATE meta SET numGens = numGens+1");
    $query->execute();
  }
}

?>
