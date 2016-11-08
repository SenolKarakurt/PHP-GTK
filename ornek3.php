<?php

	if (!extension_loaded('gtk')) { 
		dl( 'php_gtk.' . PHP_SHLIB_SUFFIX); 
	}

	function destroy(){
		Gtk::main_quit();
	}

	$pencere = new GtkWindow();
	$pencere->connect('destroy','destroy');
	$pencere->set_title("input uzerinden deger alma");

	$pencere->add($vbox = new GtkVBox());

	$baslik = new GtkLabel("\nveri girip enter'a bas!");

	$vbox->pack_start($baslik, 0, 0);

	$hbox = new GtkHBox();
	$vbox->pack_start($hbox, 10, 100);
	$hbox->pack_start(new GtkLabel("veri giriniz."), 0, 10);
	$veri = new GtkEntry();
	$hbox->pack_start($veri, 0, 30);
	$veri->connect('activate', 'verigir');

	function verigir($obje) {	

		$girilen = $obje->get_text();
	
	if (!$girilen==0 && strlen($girilen) > 3)
	   echo "Girilen veri = $girilen\n";
	elseif ($girilen=='')
	   echo "Veri girmeniz gerekmektedir!\n";
	else
	   echo "En az 4 karakter girmelisiniz!\n";
	    $obje->grab_focus(); /* Seçili text kutusunun kullanılmasını sürekli aktif yapar. */
	}

	$pencere->show_all();
	Gtk::main();
?>