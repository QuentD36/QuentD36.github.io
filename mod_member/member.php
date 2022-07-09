<?php

class Member {

    private $settings = [];
    private $controller;

    public function __construct($settings){
        $this->settings = $settings;

        $this->controller = new MemberController($this->settings);

    }

    public function action(){
        if (isset($this->settings['action'])){
            switch ($this->settings['action']){
                case 'addMember':
                    $this->controller->addMember();
                    break;
                case 'checkMember':
                    $this->controller->checkMember();
                    break;
            }
        }else{
            $this->controller->getList();
        }
    }
}