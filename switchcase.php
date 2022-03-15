<?php
    echo "Masukan Nilai anda : "; 
    fscanf(STDIN,"%d\n",$Nilai);

    switch($Nilai){
        case $Nilai >= 80:
            echo "Nilai Anda adalah $Nilai\nAnda mendaptkan Nilai A";
            break;   
        case $Nilai >= 70 && $Nilai <=79:
            echo "Nilai Anda adalah $Nilai\nAnda mendaptkan Nilai B";
            break;
        case $Nilai >= 60 && $Nilai <= 69:
            echo "Nilai Anda adalah $Nilai\nAnda mendaptkan Nilai C";
            break;  
        case $Nilai > 50 && $Nilai <=59 :
            echo "Nilai Anda adalah $Nilai\nAnda mendaptkan Nilai D";
            break; 
        case $Nilai <= 50:
            echo "Nilai Anda adalah $Nilai\nAnda mendaptkan Nilai E";
            break; 
    }