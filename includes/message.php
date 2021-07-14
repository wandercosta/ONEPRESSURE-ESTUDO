<?php
// Sessão
session_start();

function data($data){
    
    return date("d/m/Y", strtotime($data));
    
   
}

?>