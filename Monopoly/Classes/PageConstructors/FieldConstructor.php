<?php

namespace Classes\PageConstructors;
require_once "Classes/Settings.php";
use Classes\Settings;
class FieldConstructor
{
    private const CONTAINER_CLASS = "FieldContainer";
    public static function GetContainerLocator() : string
    {
        return ".".self::CONTAINER_CLASS;
    }
    public static function EchoStyle():void
    {
        $containerClass = self::CONTAINER_CLASS;
        $rotationHeightPercent = Settings::FIELD_CELL_HEIGHT;

        echo<<<STYLE
        <style>
            .$containerClass{
                display: flex;
                flex-wrap: nowrap;
                flex-direction: column;
                align-items: stretch;
            }
            .$containerClass > div:nth-child(1, 3){
                height: {100-$rotationHeightPercent*2}%;
            }
            .$containerClass > div:nth-child(2){
                height: {100-$rotationHeightPercent*2}%;
            }
        </style>
        STYLE;

    }
    public static function EchoField() : void
    {
        echo<<<FIELD
        <div class="FieldContainer">
            <div></div>
            <div></div>
            <div></div>
        </div>
        FIELD;
    }
}