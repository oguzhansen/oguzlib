<?php

function zaman($zaman)
{
    $zaman_farki = time() - $zaman;
    $saniye = $zaman_farki;
    $dakika = round($zaman_farki/60);
    $saat = round($zaman_farki/3600);
    $gun = round($zaman_farki/86400);
    $hafta = round($zaman_farki/604800);
    $ay = round($zaman_farki/2419200);
    $yil = round($zaman_farki/29030400);

    if($saniye <= 59)
    {
        return $saniye." saniye önce";
    }
    else if($dakika <= 59)
    {
        return $dakika." dakika önce";
    }
    else if($saat <= 23)
    {
        return $saat." saat önce";
    }
    else if($gun <= 6)
    {
        return $gun." gün önce";
    }
    else if($hafta <= 3)
    {
        return $hafta." hafta önce";
    }
    else if($ay <= 11)
    {
        return $ay." ay önce";
    }
    else 
    {
        return $yil." yıl önce";
    }
}

?>