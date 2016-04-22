<?php

namespace Test\Composer;

class Base{
    protected $_actionName;
    public function setAction($action)
    {
        $this->_actionName = $action;
        return true;
    }

}