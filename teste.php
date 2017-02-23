<?php



echo "Iniciando o processo teste1".PHP_EOL;
echo "Aguarde 3 segundos".PHP_EOL;
sleep(3);
$i=1;
while(true){
echo "Entrou no loop".PHP_EOL;	
echo "$i".PHP_EOL;
sleep(3);
$i+=$i;
sleep(3);
if($i == 10){
echo "I = 10 ".PHP_EOL;	
$i =1;	
} 

$i++;	
	
}

