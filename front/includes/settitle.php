<?php
class Page{
    
    public $pageTitle;

    public function setPageTitle($title)
    {
        $this->pageTitle = $title;
    }

    public function getPageTitle()
    {
        return $this->pageTitle;
    }
}