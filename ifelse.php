<?php
    echo "Masukan Nilai anda : "; 
    fscanf(STDIN,"%d\n",$Nilai);
    if($Nilai >= 80){
        echo "Nilai anda adalah $Nilai\nanda mendapatkan nilai A"; 
    }
    else if($Nilai >= 70 && $Nilai<= 79){
        echo "Nilai anda adalah $Nilai\nanda mendapatkan nilai B";
    }
    else if($Nilai >= 60 && $Nilai<= 69){
        echo "Nilai anda adalah $Nilai\nanda mendapatkan nilai C";
    }
    else if($Nilai > 50 && $Nilai <= 59){
        echo "Nilai anda adalah $Nilai\nanda mendapatkan nilai D";
    }
    else{
        echo "Nilai anda adalah $Nilai\nanda mendapatkan nilai E";
    }
?>
