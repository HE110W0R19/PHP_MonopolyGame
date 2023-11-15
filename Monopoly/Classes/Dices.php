<?php

namespace Classes;

require_once "Classes/Dice.php";
require_once "Classes/BasePage.php";

class Dices extends BasePage
{
    private array $dices = [];

    public function __construct()
    {
        $this->dices[] = new Dice();
        $this->dices[] = new Dice();
    }

    function ThrowDices(): void
    {
        /**
         * @var $index int
         * @var $dice Dice()
         */
        foreach ($this->dices as $index => $dice) {
            $dice->ThrowDice();
        }
    }

    public function getDicesValues(): string
    {
        $result = "";
        /**
         * @var $index int
         * @var $dice Dice
         */
        foreach ($this->dices as $index => $dice) {

            $value = $dice->getDiceValue();

            $result = <<<RESULT_ACC
            $result <code>Dice Num:$index Val:$value</code>
            RESULT_ACC;
        }
        return $result;
    }

    public function EchoDicesImages():void
    {
        /**
         * @var $dice Dice
         */
        foreach ($this->dices as $dice) {
            $dice->EchoDieImage();
        }
    }

    public function EchoHeader(): void
    {
        parent::EchoHeader(); // TODO: Change the autogenerated stub
        /**
         * @var $dice Dice
         */
        $dice = $this->dices[0];
        $dice->EchoHeader();
    }
}