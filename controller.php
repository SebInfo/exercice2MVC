<?php
require_once("model.php");
if ($pompiers = getAllPompiers())
{
    require_once("view.php");
}
else
{
    require_once("erreur.php");
}