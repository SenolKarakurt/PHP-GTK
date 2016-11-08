<?php
	if (!extension_loaded('gtk')) { //belirtilen eklenti yüklümü diye bakar.
		dl( 'php_gtk.' . PHP_SHLIB_SUFFIX); //dl — Belirtilen PHP eklentisini çalışma anında yükler
	}

	function destroy()
	{
		Gtk::main_quit();
	}


	$window = new GtkWindow();
	$window->connect('destroy','destroy');
	$window->set_title("Tarih Bilgisi Gosterir");

	$tarih = new GtkLabel(date('d/M/Y H:i:s'));

	$window->add($tarih);
	$window->show_all();
	Gtk::main();
?>