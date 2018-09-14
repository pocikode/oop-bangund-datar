<?php
/**
 * summary
 */
class PersegiPanjang extends BangunDatar
{
    public function submit()
    {
		$panjang = isset($_POST['panjang']) ? $_POST['panjang'] : false;   
		$lebar   = isset($_POST['lebar']) ? $_POST['lebar'] : false;
		$satuan  = isset($_POST['satuan']) ? $_POST['satuan'] : false;

		if (isset($_POST['luas'])) {
			$this->hitungLuas($panjang, $lebar, $satuan);
			return $this->hasil;
		} elseif (isset($_POST['keliling'])) {
			$this->hitungKeliling($panjang, $lebar, $satuan);
			return $this->hasil;
		}
    }

    private function hitungLuas(int $panjang, int $lebar, $satuan)
    {
    	$luas = $panjang * $lebar;
    	$this->hasil = "Luas Persegi Panjang dengan panjang $panjang $satuan dan $lebar $satuan adalah $luas $satuan<sup>2</sup>";
    }

    private function hitungKeliling(int $panjang, int $lebar, $satuan)
    {
    	$kel = 2 * ($panjang + $lebar);
    	$this->hasil = "Keliling Persegi Panjang dengan panjang $panjang $satuan dan $lebar $satuan adalah $kel $satuan";
    }
}