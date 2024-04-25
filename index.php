<?php

abstract class Qi {
    abstract public function niveauIntelligence();
}

class Intelligent extends Qi {
    private $tag = "<h2>";
    private $contenu = "Je n'ai pas oublié mon ordinateur !</h2>";

    public function niveauIntelligence() {
        return $this->tag . $this->contenu;
    }
}

class Debile extends Qi {
    private $tag = "<h2>";
    private $contenu = "J'ai oublié mon ordinateur!</h2>";

    public function niveauIntelligence() {
        return $this->tag . $this->contenu;
    }
}

$intelligent = new Intelligent();
$debile = new Debile();

echo "<h1>Niveau d'intelligence :</h1>";
echo $intelligent->niveauIntelligence();
echo $debile->niveauIntelligence();

?>