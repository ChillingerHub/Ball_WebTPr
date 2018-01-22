<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 06.01.2018
 * Time: 16:21
 */

require_once "vendor/autoload.php";

use stefan\{
    ball, ball\fussball, ball\basketball, ball\golfball
};


$ball_1_1 = new fussball("Stevens","rot", 20, "Leder");
$ball_1_2 = new fussball("Marksch", "blau", 20.3, "Plastik");

$ball_2_1 = new basketball("Wilshon","weiß", 31.5, "Leder");
$ball_2_2 = new basketball("Wilshon","orange", 33.5, "Plastik");

$ball_3_1 = new golfball("Klips", "weiß", 4, "Plastik");
$ball_3_2 = new golfball("Knaber", "weiß", 3.5, "Plastik");



$ballarray = array(
    $ball_1_1,
    $ball_1_2,
    $ball_2_1,
    $ball_2_2,
    $ball_3_1,
    $ball_3_2
);

$list = new ball\BallListing($ballarray);


echo $list->list();




/*
function renderHTML(\stefan\ball\ball $ball)
{
    return $ball;
}

function renderJSON(\stefan\ball\ball $ball){
    //return '{ "name, etc.":"fixedNameCannotAccessProperty"'.',"volume":"'.$ball->getVolume().'"}';
    return json_encode($ball);
}



if (isset($_GET['format'])) {
    if ($_GET['format'] == 'html') {
        if (isset($_GET['material'])) {

            $filtered = array();
            foreach ($ballarray as $ball)
                if (strtolower($_GET['material']) == strtolower($ball->material))
                    $filtered[] = $ball;

            echo "<ul>";
            foreach($filtered as $ball)
                echo "<li>" . renderHTML($ball) . "</li>";
            echo "</ul>";
        } else {
            echo "<ul>";
            foreach($ballarray as $ball)
                echo "<li>" . renderHTML($ball) . "</li>";
            echo "</ul>";
        }
    }

    if ($_GET['format'] == 'json') {
        //header("Content-Type: application/json");
        if (isset($_GET['material'])) {

            $filtered = array();
            foreach ($ballarray as $ball)
                if (strtolower($_GET['material']) == strtolower($ball->material))
                    $filtered[] = $ball;

            echo json_encode($filtered);
        }else{
            echo json_encode($ballarray);
        }
    }

    if ($_GET['format'] != 'json' && $_GET['format'] != 'html') {
        echo 'no format given';
    }
}
*/