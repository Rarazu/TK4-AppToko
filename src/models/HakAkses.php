<?php
require_once __DIR__ . "/Utama.php";

class HakAkses extends Utama {
	protected $table = "HakAkses";
	protected $primary_key = "IdAkses";
	protected $attributes = [
		"NamaAkses",
		"Keterangan",
	];
}