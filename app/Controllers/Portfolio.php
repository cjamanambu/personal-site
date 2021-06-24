<?php

namespace App\Controllers;

class Portfolio extends BaseController {
	public function index() {
		$data['title'] = ' - Portfolio';
		return view('portfolio', $data);
	}
}