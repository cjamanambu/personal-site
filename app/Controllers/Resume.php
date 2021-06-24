<?php

namespace App\Controllers;

class Resume extends BaseController {
	public function index() {
		$data['title'] = ' - Resume';
		return view('resume', $data);
	}
}