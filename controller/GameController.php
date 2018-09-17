<?php
class Game {
    public $gameName;
    public $publisher;
    public $description;
    public $imgSource;

    //Creates new Game
    public function Game($gameName, $publisher, $description, $imgSource) {
        $this->gameName = $gameName;
        $this->publisher = $publisher;
        $this->description = $description;
        $this->imgSource = $imgSource;
    }


    //Get a game by ID
    public function getGameById($id){

        include("../config/config.php");




        $query= $link->query("SELECT * FROM game where id = " . $id . ";");





            while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {

                $this->gameName = $rows['name'];
                $this->publisher = $rows['publisher'];
                $this->description = $rows['description'];
                $this->imgSource = $rows['picture_directory'];


                     }

    }


    //Get a game by name
    public function getGameByName($g_name){

        include("../config/config.php");


        $query= $link->query("SELECT * FROM game where name LIKE '%" . $g_name . "%';");

        while ($rows = $query->fetch_array(MYSQLI_ASSOC)) {

            $foundGame = new Game($rows['name'], $rows['publisher'], $rows['description'], $rows['picture_directory']);

            $foundGame->makeCard();


        }



    }

    //Creates new Gamecard for game
    public function makeCard() {
        echo '<div class="gameCard">
        <img src="'.$this->imgSource.'" alt="Picture of the Game" />
        <h3 class="gameTitle">',$this->gameName,'</h3>
        <p>',$this->publisher,'</p>
        </div>';
    }
}
?>