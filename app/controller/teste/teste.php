<?php

class teste extends page
{
    public function __construct()
    {
        
    }
    public function index()
    {
        $rever = new sliced;
        $rever->getTemplate("bolaofrontcreated/mailsigup.page.html");
        
    }
}
