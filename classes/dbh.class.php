<?php
class Connection {

private $link;

public function __construct() {
    $this->link = null;
}

public function close() {
    $this->link->close();
}
public function query($query) {
    return $this->link->query($query);
}

public function open() {
    $this->link = new mysqli("localhost", "root", "", "skola_matematike");
    if (!$this->link)
    return false;
   return true;    
}