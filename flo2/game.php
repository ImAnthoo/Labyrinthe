<?php
class Game {
    protected $player;
    protected $map;
    function __construct($player){
        $this->player = $player;
    }
    public function init(){
        $map = [
            [0,0,0,0,'k'],
            [0,1,1,0,1],
            ['p',1,0,0,0],
            [0,0,0,1,'e'],
        ];
        $this->setMap($map);
    }
    public function launch(){
        echo 'Bienvenue dans le jeu du labyrinthe :D';
        echo 'Voici les commandes :';
        echo 'Z = haut D = droite S = bas Q = gauche';
        $choix = rtrim(fgets(STDIN));
        return $choix;
    }
    public function setMap($map){
        $this->map = $map;
    }
    public function setPos($pos){
        $this->pos = $pos;
    }
    public function getMap(){
        return $this->map;
    }
    public function showMap(){
        for($line = 0; $line < count($this->getMap()); $line++){
            for($cell = 0; $cell < count($this->getMap()[$line]); $cell++){
                echo $this->getMap()[$line][$cell];
            }
            echo "\n";
        }
    }
    public function getPos(){
        for($line = 0; $line < count($this->getMap()); $line++){
            for($cell = 0; $cell < count($this->getMap()[$line]); $cell++){
                if($this->getPos()[$line][$cell] === 2){
                    return [$line,$cell];
                }
            }
        }
    }
}
class Player{
    function __construct(){
    }
    public function play($choix, $pos){
        $end = false;
        $map = init();
        do{
            if($choix === 'Z'){
                echo "Vous allez vers le nord\n";
                $pos->getMap()[0-1][0];
            }elseif($choix === 'Q'){
                echo "Vous allez vers l'est\n";
                $pos->getMap()[0][0-1];
            }elseif($choix === 'S'){
                echo "Vous allez vers le sud\n";
                $pos->getMap()[0+1][0];
            }elseif($choix === 'D'){
                echo "Vous allez vers l'ouest\n";
                $pos->getMap()[0][0+1];
            }else{
                echo "Choisissez votre direction \n";
            }
        }while(!$end);
    }
}

$player = new Player();
$game = new Game($player);
$game->init();
$game->showMap();
$choix = $game->launch();
$player->play($choix, $pos);

// cr??e une methode qui va demand?? ?? l'utilisateur "zqsd"
$choix = mb_strtolower(rtrim(fgets(STDIN)));

// r??cuprer la valeur et v??rifier la destination


// $this->getMap()[$ligne][$cell]
// ?? chaque tour de boucle demand?? ?? l'utilisateur de ce d??plac??
// check les co si il peux se d??placer
// se d??placer
// si 0 -> d??placement / si 1-> rien / si -> 3 fin