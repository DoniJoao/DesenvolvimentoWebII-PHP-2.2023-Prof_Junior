<?php
$paises = array('Brasil','Chile','Equador','Guatemala','México','Moçambique','Uruguai');

for($i=0; $i<=4; $i++){
    if ($i % 2 == 0){
    echo "$paises[$i] <br>";
}
}
echo "Fim da lista";
?>