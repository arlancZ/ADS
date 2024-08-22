<?php 

 class Biblioteca
 {
    const Nome = "GTK";
 }

 class aplicação extends Biblioteca{

    const Ambiente = "GNOMA Desktop";
    const versao = "3.8";

    function __construct($Nome){
        echo parent::Nome.self::Ambiente.self::versao.$Nome."<br>\n";
        
    }
 }

 echo Biblioteca::Nome . aplicação::Ambiente . aplicação::versao . "<br>.\n";

 new aplicação('Dia');
 new aplicação('Gimp');
?>