<?php
	if (!extension_loaded('gtk')) { 
	dl( 'php_gtk.' . PHP_SHLIB_SUFFIX);
	}

	function destroy(){
		Gtk::main_quit();
	}

	$pencere = new GtkWindow();
	$pencere->connect('destroy','destroy');
	$pencere->set_title("Arac Cubugu");
	$menu = new GtkMenuBar();
	$dosya = new GtkMenuItem();
	$dosya->add(new GtkLabel('Dosya'));
	$menu->prepend($dosya); //Başa eklenen
	$duzen = new GtkMenuItem('_Duzen');
	$menu->append($duzen); //Başa eklenenin devamına ekler
	$yardim = new GtkMenuItem('_Yardim');
	$menu->append($yardim);
	$pencere->add($menu);

	$pencere->show_all();
	Gtk::main();
?>