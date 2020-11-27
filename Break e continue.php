<?php
//continue pula, break quebra
for ($contador = 1; $contador <= 16; $contador++){
    if ($contador == 13) {
        continue;
    }

    echo "#$contador" . PHP_EOL;
}