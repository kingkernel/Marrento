<?php

class htmlwrapper
{
    public function construct()
    {

    }
    public function loadtemplate($template, $fields = [])
    {
        if (is_string($template)){
            $tpl = new sliced;
            $content = $tpl->getTemplate($template);
            foreach ($fields as $key => $value) {
                $content = str_replace('@field{{'.$key.'}}', $value, $content);
            };
            return fastload($content);
        };
        if (is_array($template)){
            $file =  "foi passado um array";
        };
        return $file;
    }
}
