<?php
namespace php\packages\Classes;

Class ComponentTest
{
    protected $actionType;
    
    public function __construct($action = null) {
        $this->actionType = $action;
    }
    
    public function index() {
        return "Hello , I am and index action";
    }
    
    public function show() {
        return "Hello, I am record showing action";
    }
    
    public function add() {
        return "Hello, I am a record add action";
    }
    
    public function update() {
        return "Hello, I am an update action";
    }
    
    public function delete() {
        return "Hello, I am a delete action";
    }
    
    public function dispatch() {
        switch ($this->actionType) {
            case 'index':
                return $this->index();
                break;
            case 'show':
                return $this->show();
                break;
            case 'add':
                return $this->add();
                break;
            case 'update':
                return $this->update();
                break;
            case 'delete':
                return $this->delete();
                break;
            default :
                return $this->index();
        }
    }
}
