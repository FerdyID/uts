<?php
class rumus {	
	public function genap($awal, $akhir){
		$jGenap=0;
		$jumlah=0;
		echo "Deret = ";
		for ($i= $awal; $i <= $akhir; $i++){
			if($i % 2 == 0){
				$jGenap++;
				echo $i . " ";
				$jumlah+=$i;				
			}
		}
		echo "<br>Jumlah bilangan genap dari $awal sampai $akhir = " . $jGenap;
		echo "<br>Jumlah total = " . $jumlah;
		echo "<br>Rata - rata  = " . $jumlah/$jGenap;
	}	
	public function ganjil($awal, $akhir){
		$jGanjil=0;
		$jumlah=0;
		echo "Deret = ";
		for ($i=$awal; $i <= $akhir; $i++){
			if($i % 2 == 1){
				$jGanjil++;
				echo $i . " ";
				$jumlah+=$i;
			}
		}
		echo "<br>Jumlah bilangan ganjil dari $awal sampai $akhir = " . $jGanjil;
		echo "<br>Jumlah total = " . $jumlah;
		echo "<br>Rata - rata  = " . $jumlah/$jGanjil;
	}
	public function pangkat($bil, $pang){
		$hasil=1;
		for ($i=1; $i<=$pang; $i++){
			$hasil *= $bil;
        }
        echo "Hasil $bil pangkat $pang = " . $hasil;
    }
}
?>