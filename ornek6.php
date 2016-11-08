<?php
	if (!extension_loaded('gtk')) {
	dl( 'php_gtk.' . PHP_SHLIB_SUFFIX);
	}

	function destroy(){
		Gtk::main_quit();
	}
	
	function giris() {
            global   $pencere;
            print "Sisteme girdiniz!\n";
            $pencere->destroy();
	}

	$pencere = &new GtkWindow();
	$pencere->connect('destroy', 'destroy');
	$pencere->set_border_width(60);
	$pencere->set_title("Sisteme girmek istiyorsunuz..");
	$buton = &new GtkButton('Sisteme Giris');
	$buton->connect('clicked', 'giris');
	$buton->set_border_width(10);
	$pencere->add($buton);
	$pencere->show_all();
	Gtk::main();
?>