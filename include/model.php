<?php


abstract class Model
{

    private $cnx;

    /**
     * Connection to DB (getBD) and run query
     *
     * @param $sql
     * @param $settings
     * @return false|PDOStatement
     */
    protected function runQuery($sql, $settings = NULL)
    {

        if ($settings == NULL) {

            $result = $this->getBD()->query($sql);

        } else {

            $result = $this->getBD()->prepare($sql);

            $result->execute($settings);
        }

        return $result;
    }

    /**
     * Connection to DB
     *
     * @return PDO
     */
    private function getBD()
    {

        if ($this->cnx == NULL) {

            $this->cnx = new PDO('mysql:host=' . SERVER . ';dbname=' . BASE, NAME, PWD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

        }

        return $this->cnx;
    }

}
