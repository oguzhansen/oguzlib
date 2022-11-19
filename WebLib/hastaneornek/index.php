<?php
//tanımlı değerler
$saat = 4;
$aracTuru = "personel";
 
if($saat == 1 && $aracTuru == "personel"):
    $ucret = 1;
elseif($saat == 1 && $aracTuru == "hasta") :
    $ucret = 2;
elseif($saat > 1 && $aracTuru == "personel"):
    $ucret = 1 + ($saat - 1) * 1.05;
elseif($saat > 1 && $aracTuru == "hasta") :
    $ucret = 2 + ($saat - 1) * 1.07 * 2;
endif;    
 
echo "Kaldığı Süre : $saat <br>".
     "Araç Türü : $aracTuru <br>".
     "Ücreti : $ucret";
 