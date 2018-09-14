<?php 
/**
 * summary
 */
class Segitiga extends BangunDatar
{
    /**
     * summary
     */
    public function submit()
    {
		$jenis  = isset($_POST['jenis']) ? $_POST['jenis'] : false;
		$sisi   = isset($_POST['sisi']) ? $_POST['sisi'] : 0;
		$kaki   = isset($_POST['sisi-kaki']) ? $_POST['sisi-kaki'] : 0;
		$sisi2  = isset($_POST['sisi2']) ? $_POST['sisi2'] : 0;
		$sisi3  = isset($_POST['sisi3']) ? $_POST['sisi3'] : 0;
		$satuan = isset($_POST['satuan']) ? $_POST['satuan'] : 0;
        
		if (isset($_POST['luas'])) {
			switch ($jenis) {
				case 'sama-sisi':
					$this->luasSamaSisi($sisi, $atuan);
					break;

				case 'sama-kaki':
					$this->luasSamaKaki($sisi, $kaki, $satuan);
					break;
				
				case 'sembarang':
					$this->luasSembarang($sisi, $sisi2, $sisi3, $satuan);
					break;
			}
			return $this->hasil;
		} elseif (isset($_POST['keliling'])) {
			$this->hitungKeliling($sisi, $sisi2, $sisi3, $kaki, $satuan);
			return $this->hasil;
		}
    }

    private function luasSamaSisi($sisi, $satuan)
    {
		$tinggi = sqrt($sisi**2 - (0.5*$sisi)**2);
    	$luas = 0.5 * $sisi * $tinggi;

    	$this->hasil = "Luas segitiga sama sisi dengan sisi $sisi $satuan adalah $luas $satuan<sup>2</sup>";
    }

    private function luasSamaKaki($sisi, $kaki, $satuan)
    {
    	$tinggi = sqrt($kaki**2 - (0.5*$sisi)**2);
    	$luas   = 0.5 * $sisi * $tinggi;

    	$this->hasil = "Luas segitiga sama kaki dengan alas $sisi $satuan dan kaki $kaki $satuan adalah $luas $satuan<sup>2</sup>";
    }

    private function luasSembarang($a, $b, $c, $satuan)
    {
    	$s = 0.5*($a+$b+$c);
   		$luas = sqrt($s*($s-$a)*($s-$b)*($s-$c));

   		$this->hasil = "Luas segitiga sembarang dengan sisi $a$satuan, $b$satuan, dan $c$satuan adalah $luas $satuan<sup>2</sup>";
    }

    private function hitungKeliling($sisi, $sisi2, $sisi3, $kaki, $satuan)
    {
    	$kel = $sisi+$sisi2+$sisi3+$kaki;
    	$this->hasil = "Keliling segitiga adalah $kel $satuan";
    }
}