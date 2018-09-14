<?php
/**
 * summary
 */
class Persegi extends BangunDatar
{
    public function submit()
    {
		$sisi  = isset($_POST['sisi']) ? $_POST['sisi'] : false;
		$satuan = isset($_POST['satuan']) ? $_POST['satuan'] : false;

    	if (isset($_POST['luas'])) {
    		$this->hitungLuas($sisi, $satuan);
    		return $this->hasil;
    	} elseif (isset($_POST['keliling'])) {
    		$this->hitungKeliling($sisi, $satuan);
    		return $this->hasil;
    	}
    }

    private function hitungLuas(int $sisi, $satuan)
    {
    	$luas = $sisi**2;
    	$this->hasil = "Luas Persegi dengan sisi $sisi $satuan adalah $luas $satuan<sup>2</sup>";
    }

    private function hitungKeliling(int $sisi, $satuan)
    {
    	$kel = $sisi*4;
    	$this->hasil = "Keliling Persegi dengan sisi $sisi $satuan adalah $kel $satuan";
    }
}