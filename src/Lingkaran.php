<?php 
/**
 * summary
 */
class Lingkaran extends BangunDatar
{
	// PHI
	const PHI = 3.14;

    public function submit()
    {
		$diameter = isset($_POST['diameter']) ? $_POST['diameter'] : false;
		$satuan   = isset($_POST['satuan']) ? $_POST['satuan'] : false;

		if (isset($_POST['luas'])) {
			$this->hitungLuas($diameter, $satuan);
			return $this->hasil;
		} elseif (isset($_POST['keliling'])) {
			$this->hitungKeliling($diameter, $satuan);
			return $this->hasil;
		}
    }

    private function hitungLuas(int $diameter, $satuan)
    {
    	$luas = 1/4 * self::PHI * $diameter;
    	$this->hasil = "Luas Lingkaran dengan diameter $diameter $satuan adalah $luas $satuan<sup>2</sup> ";
    }

    private function hitungKeliling(int $diameter, $satuan)
    {
    	$kel = self::PHI * $diameter;
    	$this->hasil = "Keliling Lingkaran dengan diameter $diameter $satuan adalah $kel $satuan";
    }
}