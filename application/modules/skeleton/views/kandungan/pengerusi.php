<?php

	/*
Di lesenkan di bawah BSD 
Hak cipta © 2014, hasnan bin Hasim (nan asklinux)
Semua hak cipta terpelihara.
Pengedaran semula dan penggunaan dalam bentuk sumber dan perduaan, 
sama ada dengan pengubahsuaian atau tanpa pengubahsuaian, 
adalah dibenarkan dengan syarat-syarat berikut:
Pengedaran semula kod sumber mestilah mengekalkan 
notis hak cipta di atas, senarai syarat ini dan penolak tuntutan yang berikut.
Pengedaran semula dalam bentuk perduaan hendaklah menghasilkan semula notis 
hak cipta di atas, senarai syarat ini dan penolak tuntutan yang berikut dalam 
dokumentasinya dan/atau bahan-bahan lain yang dibekalkan bersama edaran tersebut.
Nama <organisasi> atau nama penyumbang-penyumbangnya tidak boleh digunakan untuk 
mengendors atau mempromosikan produk-produk terbitan daripada perisian ini 
tanpa kebenaran bertulis yang spesifik.
PERISIAN INI DIBEKALKAN OLEH hasnan bin Hasim (nan asklinux)
DALAM KEADAAN "SEDIA ADA" DAN SEBARANG TUNTUTAN WARANTI YANG NYATA ATAU TERSIRAT, 
TERMASUK, TETAPI TIDAK TERHAD KEPADA, WARANTI-WARANTI NYATA BAGI KEBOLEHDAGANGAN DAN 
KESESUAIAN UNTUK TUJUAN TERTENTU ADALAH DITOLAK. hasnan bin Hasim (nan asklinux) TIDAK BERTANGGUNGJAWAB 
UNTUK SEBARANG GANTI RUGI KEROSAKAN LANGSUNG, TIDAK LANGSUNG, SAMPINGAN, KHAS, 
TELADAN ATAU LANJUTAN (TERMASUK, TETAPI TIDAK TERHAD KEPADA, PEMEROLEHAN BARANG ATAU 
PERKHIDMATAN PENGGANTI; KERUGIAN GUNA, DATA ATAU KEUNTUNGAN; ATAU GANGGUAN PERNIAGAAN) YANG 
BERLAKU DENGAN APA CARA SEKALIPUN DAN PADA APA JUA TEORI LIABILITI, SAMA ADA DALAM KONTRAK, 
LIABILITI KETAT, ATAU TORT (TERMASUK KECUAIAN ATAU SEBALIKNYA) YANG TIMBUL DALAM APA JUA 
CARA DARIPADA PENGGUNAAN PERISIAN INI, MESKIPUN SETELAH DINASIHATI TENTANG 
KEMUNGKINAN KEROSAKAN TERSEBUT. 
 
 */	

			

		if ($menu == 1){	

			echo $this->load->view('fungsi/profile'); 

		}
		else if ($menu == 5){
		//Antaramuka kawalan bagi PROJEK 
			if (isset($_GET['lari'])){

				if ($_GET['lari'] == "baru"){ 
					echo $this->load->view('lari/projek_baru');
				}
				else if ($_GET['lari'] == "papar"){ 
					echo $this->load->view('lari/projek_papar');
				}
				else if ($_GET['lari'] == "ubah"){ 
					echo $this->load->view('lari/projek_kemaskini');
				}
				else { echo "Tiada Data"; }


			}
			else{	

			echo $this->load->view('fungsi/projek'); 
			}

		}
		else if ($menu == 6){	
		//Antaramuka kawalan bagi MESYUARAT
			if (isset($_GET['lari'])){
				
				if ($_GET['lari'] == "baru"){ 
					echo $this->load->view('lari/mesyuarat_baru');
				}
				else if ($_GET['lari'] == "ubah"){ 
					echo $this->load->view('lari/mesyuarat_kemaskini');
				}
				else { echo "Tiada Data"; }
			}
			else{	
			echo $this->load->view('fungsi/mesyuarat'); 
			}
		}
		else if ($menu == 7){
			
		//Antaramuka kawalan bagi LAD
			
			if (isset($_GET['lari'])){
				
				if ($_GET['lari'] == "baru"){ 
					echo $this->load->view('lari/lad_baru');
					
				}
				else if ($_GET['lari'] == "papar"){ 
					echo $this->load->view('lari/lad_papar');
				}
				else if ($_GET['lari'] == "ubah"){ 
					echo $this->load->view('lari/lad_kemaskini');
				}
				else { echo "Tiada Data"; }
			}
			else{
			echo $this->load->view('fungsi/lad'); 
			}
		}
		else{
			
			echo $this->load->view('panel_main');
		}

?>
