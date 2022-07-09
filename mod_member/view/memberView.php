<?php

class MemberView{

    private $settings = [];
    private $tpl;

    public function __construct($settings){

        $this->settings = $settings;
        $this->tpl = new Smarty();
    }

    public function generateView($members){

        if( $members==null || count($members)< 3){
            $this->tpl->assign('crew', $members);
            $this->tpl->assign('firstCrew', null);
        }else{
            $firstCrew = array_slice($members,0, ceil(count($members)/3));
            $secondCrew = array_slice($members,ceil(count($members)/3), ceil(count($members)/3));
            $lastCrew = array_slice($members,ceil(count($members)/3)+ ceil(count($members)/3),ceil(count($members)/3));

            $this->tpl->assign('firstCrew', $firstCrew);
            $this->tpl->assign('secondCrew', $secondCrew);
            $this->tpl->assign('lastCrew', $lastCrew);

        }


        $this->tpl->assign('error', MemberTable::getErrorMsg());
        $this->tpl->assign('success', MemberTable::getSuccessMsg());


        $this->tpl->display('mod_member/view/memberView.tpl');
    }
}