<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class ProdukController extends BaseController
{

    public function index(): string
    {
        // Dummy data
        $produk = [
            ['id' => 1, 'nama_produk' => 'Produk 1', 'harga' => 100000, 'stok' => 10],
            ['id' => 2, 'nama_produk' => 'Produk 2', 'harga' => 200000, 'stok' => 5],
        ];

        $data = [
            'title'      => $this->generateTitle(),
            'menu'       => 'produk',
            'submenu'    => 'list',
            'breadcrumb' => $this->generateBreadcrumb(),
            'produk'     => $produk,
        ];
        return view('v_produk', $data);
    }

    public function tambah(): string
    {
        $data = [
            'title'      => $this->generateTitle(),
            'menu'       => 'produk',
            'submenu'    => 'tambah',
            'breadcrumb' => $this->generateBreadcrumb(),
        ];
        return view('v_tambah_produk', $data);
    }

    public function simpan()
    {
        // Dummy validation
        $rules = [
            'nama_produk' => 'required|min_length[3]|max_length[255]',
            'harga'       => 'required|numeric|greater_than[0]',
            'stok'        => 'required|integer|greater_than_equal_to[0]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Dummy save
        // In real app, save to database

        return redirect()->to('produk')->with('success', 'Produk berhasil ditambahkan.');
    }
}
