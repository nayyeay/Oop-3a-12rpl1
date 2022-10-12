<?php
$people = array("kode_barang"=>["01","02","03"],
                "nama_barang"=>["Hoodie","Sweeter","Jaket"],
                "Harga"=>[85000,48000,55000]);
    for ($i=0; $i < count($people["kode_barang"]); $i++) { 
        echo "|".$people["kode_barang"][$i];
        for ($j=$i; $j < count($people["nama_barang"]); $j+=3) { 
            
            // echo "\n";
        echo "|".$people["nama_barang"][$j];
        for ($k=$j; $k < count($people["Harga"]); $k+=3) { 
            echo "|".$people["Harga"][$k];
            echo "\n";
            }
        }
    }
?>