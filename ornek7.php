<?php
	if (!extension_loaded('gtk')) { 
		dl( 'php_gtk.' . PHP_SHLIB_SUFFIX);
	}

	function destroy(){
		Gtk::main_quit();
	}

	$pencere = &new GtkWindow();
	$pencere->connect('destroy','destroy');
	$pencere->set_title("Border ile Cerceve Yapmak");

	$vbox = new GtkVBox();

	$cerceve = new GtkFrame();

	$baslik = new GtkLabel('Frame ile cercevelenmis karakter');
	$cerceve->add($baslik);
	$vbox->pack_start($cerceve, 50, 25);

	$yazi = new GtkLabel('Metin - Text');
	$vbox->pack_start($yazi);

	$pencere->add($vbox);
	$pencere->show_all();
	Gtk::main();
?>