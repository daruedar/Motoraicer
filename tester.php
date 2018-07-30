<?php
include 'micro/MisClases/Pdf.php';
$var = new Pdf();
$rta=$var->getProducto(120);
echo($rta);
echo("***********");
$datos[0]='intento1';
$datos[1]='intento2';
$datos[2]='intento3';
$datos[3]='intento4';
$datos[4]='intento5';
$datos[5]='intento6';
$datos[6]='intento7';
$datos[7]='intento8';
$datos[8]='intento9';

function li1(){echo("<br>Lista1");}
function li2(){echo("<br>Lista2");}
function li3(){echo("<br>Lista3");}


function ul1(){
        echo('<ul class="products-grid row first odd">');
        li1();
        li2();
        li3();
        echo('</ul>'); 
    }
function ul2(){
        echo('<ul class="products-grid row even">');
        li1();
        li2();
        li3();
        echo('</ul>'); 
    }
function ul3(){
        echo('<ul class="products-grid row odd">');
        li1();
        li2();
        li3();
        echo('</ul>'); 
    }


for($i=0;$i<count($datos);$i++){
    echo($datos[$i]);echo('<br>');
}

?>