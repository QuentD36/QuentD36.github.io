<?php

class MemberController{

    private $settings = [];
    private $model;
    private $view;

    public function __construct($settings){

        $this->settings = $settings;

        $this->model = new MemberModel($settings);

        $this->view = new MemberView($settings);
    }

    public function addMember(){

        $newMember = new MemberTable($this->settings);

        $this->checkMember($newMember);

        if ($newMember->getAllowDB() == false){
            $this->getList();
        }else{
            $this->model->addMember($newMember);
            $this->getList();
        }
    }

    public function checkMember($member){

        $this->model->checkName($member);
    }

    public function getList(){
        $crew = $this->model->getAllMembers();

        $this->view->generateView($crew);
    }
}