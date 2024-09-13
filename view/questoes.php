<?php
session_start();
require_once "../controller/Controller.php";
$controlador = new Controller();
if ($_POST['trilha'] === 'Trilha 1') {
    echo $controlador->puxarQuestoes('TAD');
} else {
}
