<?php
	if (!extension_loaded('gtk')) { 
	dl( 'php_gtk.' . PHP_SHLIB_SUFFIX);
	}

	function destroy(){
		Gtk::main_quit();
	}

	function yaz(){
		echo "PHP-GTK\n";
	}

	$pencere = new GtkWindow();
	$pencere->connect('destroy','destroy');
	$pencere->set_title("Basit Yazi");

	$buton = new GtkButton("yaziyi yaz");
	$buton->connect('clicked','yaz');
	
	$pencere->add($buton);
	$pencere->show_all();
	Gtk::main();
?>
