<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{
    protected $table      = 'produk';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nama_produk', 'harga', 'stok'];

    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    protected $validationRules    = [
        'nama_produk' => 'required|min_length[3]|max_length[255]',
        'harga'       => 'required|numeric|greater_than[0]',
        'stok'        => 'required|integer|greater_than_equal_to[0]',
    ];

    protected $validationMessages = [
        'nama_produk' => [
            'required'   => 'Nama produk harus diisi.',
            'min_length' => 'Nama produk minimal 3 karakter.',
            'max_length' => 'Nama produk maksimal 255 karakter.',
        ],
        'harga' => [
            'required'      => 'Harga harus diisi.',
            'numeric'       => 'Harga harus berupa angka.',
            'greater_than'  => 'Harga harus lebih besar dari 0.',
        ],
        'stok' => [
            'required'              => 'Stok harus diisi.',
            'integer'               => 'Stok harus berupa bilangan bulat.',
            'greater_than_equal_to' => 'Stok tidak boleh negatif.',
        ],
    ];
}