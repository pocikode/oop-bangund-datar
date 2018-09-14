<?php 
/**
 * summary
 */
class BelahKetupat extends BangunDatar
{
    public function submit()
    {
		$sisi     = isset($_POST['sisi']) ? $_POST['sisi'] : false;
		$diagonal = isset($_POST['diagonal']) ? $_POST['diagonal'] : false;
		$satuan   = isset($_POST['satuan']) ? $_POST['satuan'] : false;

		for ($i = 0; $i < 2; $i++) {
			if (empty($diagonal[$i])) {
				unset($diagonal[$i]);
				array_splice($diagonal, 1);
			}
		}

		if (isset($_POST['luas'])) {
			$this->hitungLuas($sisi, $diagonal, $satuan);
			return $this->hasil;
		}
		elseif (isset($_POST['keliling'])) {
			$this->hitungKeliling($sisi, $diagonal, $satuan);
			return $this->hasil;
		}
    }

    private function hitungLuas($sisi, $diagonal, $satuan)
    {
    	if (count($diagonal) == 2) {
    		$luas = 1/2 * $diagonal[0] * $diagonal[1];
    		$this->hasil = "Luas Belah Ketupat dengan d1 $diagonal[0] $satuan dan d2 $diagonal[1] $satuan adalah $luas $satuan<sup>2</sup>";
    	} 
    	elseif (count($diagonal) == 1) {
    		if ($sisi) {
    			$diagonal[1] = 2 * sqrt($sisi**2 - (0.5*$diagonal[0])**2);
    			$luas = 1/2 * $diagonal[0] * $diagonal[1];

    			$this->hasil = "Luas Belah Ketupat dengan d1 $diagonal[0] $satuan dan sisi $sisi $satuan adalah $luas $satuan<sup>2</sup>";
    		} else {
    			$this->error = "Jika diagonal hanya 1, sisi harus diisi!";
    		}
    	}
    }

    private function hitungKeliling($sisi, $diagonal, $satuan)
    {
    	if ($sisi) {
    		$kel = $sisi *4;
    		$this->hasil = "Keliling Belah Ketupat dengan sisi $sisi $satuan adalah $kel $satuan";
    	} else {
    		if (count($diagonal) == 2) {
    			$sisi = sqrt((0.5*$diagonal[0])**2 + (0.5*$diagonal[1])**2);
    			$kel = $sisi*4;
    			$this->hasil = "Keliling Belah Ketupat dengan d1 $diagonal[0] $satuan dan d2 $diagonal[1] $satuan adalah $kel $satuan";
    		} else {
    			$this->error = "Jika tidak ada sisi, kedua diagonal harus diisi!";
    		}
    	}
    }
}