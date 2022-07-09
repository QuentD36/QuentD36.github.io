<?php

class MemberTable{

    private $id ='';
    private $name = '';

    private $allowDB = true;

    private static $errorMsg = "";
    private static $successMsg = "";

    /**
     * Generate automatically an Object of this class
     *
     * @param array $row
     * @return void
     */
    public function hydrater(array $row)
    {
        foreach ($row as $key => $value) {
            $setter = "set" . ucfirst($key);

            if (method_exists($this, $setter)) {
                $this->$setter($value);
            }
        }
    }

    public function __construct($data = null){
        if($data !=null){
            $this->hydrater($data);
        }
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        if(ctype_space($name) || empty($name) || !is_string($name) || strlen($name) > 50){
            self::setErrorMsg('Veuillez saisir un nom correct !');
            $this->setAllowDB(false);
        }
        $this->name = $name;
    }

    /**
     * @return bool
     */
    public function getAllowDB()
    {
        return $this->allowDB;
    }

    /**
     * @param bool $allowDB
     */
    public function setAllowDB($allowDB)
    {
        $this->allowDB = $allowDB;
    }

    /**
     * @return string
     */
    public static function getErrorMsg()
    {
        return self::$errorMsg;
    }

    /**
     * @param string $errorMsg
     */
    public static function setErrorMsg($errorMsg)
    {
        self::$errorMsg .= $errorMsg;
    }

    /**
     * @return string
     */
    public static function getSuccessMsg()
    {
        return self::$successMsg;
    }

    /**
     * @param string $successMsg
     */
    public static function setSuccessMsg($successMsg)
    {
        self::$successMsg .= $successMsg;
    }



}