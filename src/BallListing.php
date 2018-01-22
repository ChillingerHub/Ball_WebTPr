<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 18.01.2018
 * Time: 11:40
 */

namespace stefan\ball;


class BallListing
{
    public $listing = ["Keine Bälle zum Laden"];

    public function __construct($listing)
    {
        $this->listing = $listing;
    }

    function renderHTML(\stefan\ball\ball $ball)
    {
        return $ball;
    }

    /**
     * @return array
     */
    public function listHtml()
    {


        if (isset($_GET['material'])) {

            $filtered = array();
            foreach ($this->listing as $ball)
                if (strtolower($_GET['material']) == strtolower($ball->material))
                    $filtered[] = $ball;

            echo "<ul>";
            foreach ($filtered as $ball)
                echo "<li>" . $this->renderHTML($ball) . "</li>";
            echo "</ul>";
        } else {
            echo "<ul>";
            foreach ($this->listing as $ball)
                echo "<li>" . $this->renderHTML($ball) . "</li>";
            echo "</ul>";
        }

    }

    public function listJson()
    {


        //header("Content-Type: application/json");
        if (isset($_GET['material'])) {

            $filtered = array();
            foreach ($this->listing as $ball)
                if (strtolower($_GET['material']) == strtolower($ball->material))
                    $filtered[] = $ball;

            echo json_encode($filtered);
        } else {
            echo json_encode($this->listing);
        }
    }

    public function list()
    {
        if (isset($_GET['format'])) {
            if ($_GET['format'] == 'html') {
                if (isset($_GET['material'])) {

                    $filtered = array();
                    foreach ($this->listing as $ball)
                        if (strtolower($_GET['material']) == strtolower($ball->material))
                            $filtered[] = $ball;

                    echo "<ul>";
                    foreach ($filtered as $ball)
                        echo "<li>" . $this->renderHTML($ball) . "</li>";
                    echo "</ul>";
                } else {
                    echo "<ul>";
                    foreach ($this->listing as $ball)
                        echo "<li>" . $this->renderHTML($ball) . "</li>";
                    echo "</ul>";
                }
            }

            if ($_GET['format'] == 'json') {
                //header("Content-Type: application/json");
                if (isset($_GET['material'])) {

                    $filtered = array();
                    foreach ($this->listing as $ball)
                        if (strtolower($_GET['material']) == strtolower($ball->material))
                            $filtered[] = $ball;

                    echo json_encode($filtered);
                } else {
                    echo json_encode($this->listing);
                }
            }

            if ($_GET['format'] != 'json' && $_GET['format'] != 'html') {
                echo 'no format given';
            }
        }
    }
}