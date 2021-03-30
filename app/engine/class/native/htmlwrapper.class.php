<?php

class htmlwrapper
{
    public function construct()
    {

    }
    public function loadtemplate($template)
    {
        if (is_string($template)){
            echo "foi passado uma string";
        };
        if (is_array($template)){
            echo "foi passado um array";
        };
        $file = file_get_contents(PATHVIEW."templates/".$template);
        return $file;
    }
}
