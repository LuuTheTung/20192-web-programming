<?php

class Page {

    private $page;
    private $title;
    private $year;
    private $copyright;

    function __construct($page, $title, $year, $copyright) {
        $this->page = $page;
        $this->title = $title;
        $this->year = $year;
        $this->copyright = $copyright;
    }

    private function addHeader() {
        $this->title = $this->title;
    }

    public function addContent($content) {
        $this->page = $this->page . $content;
    }

    private function addFooter() {
        $this->copyright = $this->copyright;
    }

    public function get() {
        return ("<h1 align=\"center\">$this->title</h1>" . "<br><h3 align=\"center\">$this->page</h3>" . "<br><h3 align=\"center\">$this->copyright<br>$this->year</h3>");
    }

}

?>