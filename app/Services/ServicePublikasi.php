<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class ServicePublikasi
{

    public function getPublikasi()
    {
        return Http::get('https://boiling-savannah-93407.herokuapp.com/publikasi');
    }
    public function addPublikasi()
    {
        return Http::post('https://boiling-savannah-93407.herokuapp.com/publikasi');
    }
    public function editPublikasi($id)
    {
        return Http::post('https://boiling-savannah-93407.herokuapp.com/publikasi');
    }
}
