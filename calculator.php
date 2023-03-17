<?php 
error_reporting(0);

class calculator{
    public $num1, $num2, $cal;


    public function __construct($num1, $num2, $cal)
    {
        $this->num1 = $num1;
        $this->num2 = $num2;
        $this->cal = $cal;
    }

    public function result(){
        switch($this->cal){
            case 'add':
                $result = $this->num1 + $this->num2;
                break;
            case 'sub':
                $result = $this->num1 - $this->num2;
                break;
            case 'mul':
                $result = $this->num1 * $this->num2;
                break;
            case 'div':
                $result = $this->num1 / $this->num2;
                break;

            default:
            $result = "";
            break;
        }
        return $result;
    }
}

?>