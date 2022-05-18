<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Beranda'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'Tentang Kami'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Kontak Kami',
            'alamat' => [
                [
                    'jenis'=>'Kantor Pusat',
                    'alamat' => 'Jl. Arjuna Utara No.9, Kb. Jeruk, Kec. Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11510',
                    'telp' => '(021) 5674223'
                ],
                [
                    'jenis'=>'Kantor Cabang',
                    'alamat' => 'Jl. Citra Raya Boulevard Blok. S 25/ 01, Kelurahan Panongan, Kecamatan Panongan, Kabupaten Tangerang, Banten 15711',
                    'telp' => '(021) 22596025'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
