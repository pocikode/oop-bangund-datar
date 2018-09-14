function tampilkan() {
	var segitiga = document.getElementById("form-segitiga").jenis.value;

	if(segitiga == "sama-sisi") {
		document.getElementById("opsi-segitiga").innerHTML="<div class='form-group'> <input type='number' class='form-control' name='sisi' placeholder='Sisi' required> </div> ";
	} else if(segitiga == "sama-kaki") {
		document.getElementById("opsi-segitiga").innerHTML="<div class='form-group'> <input type='number' class='form-control' name='sisi' placeholder='Sisi Alas' required> </div> <div class='form-group'> <input type='number' class='form-control' name='sisi-kaki' placeholder='Sisi Kaki'></div>";
	} else if(segitiga == "sembarang") {
		document.getElementById("opsi-segitiga").innerHTML="<div class='form-group'> <input type='number' class='form-control' name='sisi-alas' placeholder='Sisi Alas' required> </div> <div class='form-group'> <input type='number' class='form-control' name='sisi2' placeholder='Sisi 2' aria-describedby='sisi2Help'> <small id='sisi2Help' class='form-text text-muted'>Masukkan Sisi 2, jika ada</small> </div> <div class='form-group'> <input type='number' class='form-control' name='sisi3' placeholder='Sisi 3'></div> <div class='form-group'> <input type='number' class='form-control' name='tinggi' placeholder='Tinggi''></div>";
	}
}