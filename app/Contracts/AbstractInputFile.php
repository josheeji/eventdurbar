<?php

namespace App\Contracts;

abstract class  AbstractInputFile
{

    const INPUT_TYPE_TEXT = "Text";
    const INPUT_TYPE_NUMBER = "Number";
    const INPUT_TYPE_SELECT = "Select";
    const INPUT_TYPE_FILE = "File";
    const INPUT_TYPE_CHECKBOX = "Checkbox";
    const INPUT_TYPE_RADIO = "Radio";
    const INPUT_TYPE_DATE = "DateTime";
    // const INPUT_TYPE_PASSWORD = "password";


    public static function toArray()
    {
        return [
            self::INPUT_TYPE_TEXT => self::INPUT_TYPE_TEXT,
            self::INPUT_TYPE_NUMBER => self::INPUT_TYPE_NUMBER,
            self::INPUT_TYPE_SELECT => self::INPUT_TYPE_SELECT,
            self::INPUT_TYPE_FILE => self::INPUT_TYPE_FILE,
            self::INPUT_TYPE_CHECKBOX => self::INPUT_TYPE_CHECKBOX,
            self::INPUT_TYPE_RADIO => self::INPUT_TYPE_RADIO,
            self::INPUT_TYPE_DATE => self::INPUT_TYPE_DATE,
        ];
    }
}
