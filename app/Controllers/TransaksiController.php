<?php

namespace App\Controllers;

class TransaksiController extends BaseController
{
    public function index(): string
    {
        $data = [
            'title'      => $this->generateTitle(),
            'menu'       => 'transaksi',
            'breadcrumb' => $this->generateBreadcrumb(),
        ];
        return view('v_keranjang', $data);
    }
}
