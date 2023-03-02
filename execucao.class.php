<?php
//importacao
require_once("automoveis.class.php");

//nome da classe
class Execucao{
    private $carrop;
    private $carrof;

    public function _construct(){
        $carrop = new automoveis();
        $carrop->setTipo("<b>Tipo:</b> Porshe <br>");
        echo $carrop->getTipo()

        $carrop->setCor("<b>Cor:</b> Cinza <br>");
        echo $carrop->getCor();

        $carrop->setPlaca("<b>Placa:</b> JDG-8542<br>");
        echo $carrop->getPlaca();

        $carrop->setNdportas("<b>Numero de postas:</b> 4<br>");
        echo $carrop->getNdposrtas();

        $carrof = new automoveis();

        $carrof->setTipo("<b>Tipo:</b> BMW <br>");
        echo $carrof->getTipo();

        $carrof->setCor("<b>Cor:</b> Branco <br>");
        echo $carrof->getCor();

        $carrof->setPlaca("<b>Placa:</b> BMK-7596 <br>");
        echo $carrof->getPlaca();

        $carrof->setNdportas("<b>Numero de portas:</b> 2 <br>");
        echo $carrof->getNdportas();

    }
}new Execucao();