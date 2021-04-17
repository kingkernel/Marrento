<?php
class pagina extends page
{
    public function __construct()
    {
    
    }
    public function comofunciona()
    {
        $this->loadview('templates.bolaofrontcreated.comofunciona');
    }
    public function coins()
    {
        $this->loadview('templates.bolaofrontcreated.credit');
    }
}