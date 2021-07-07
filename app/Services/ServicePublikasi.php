<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class ServicePublikasi
{
    private $url = "https://boiling-savannah-93407.herokuapp.com/publikasi";

    public function getPublication()
    {
        return Http::get($this->url);
    }
    public function addPublication()
    {
        return Http::post($this->url);
    }

    public function showOnePublication($id)
    {
        return Http::get($this->url . '/' . $id);
    }

    public function updatePublication($id)
    {
        return Http::put($this->url . '/' . $id);
    }
    public function deletePublication($id)
    {
        return Http::delete($this->url . '/' . $id);
    }
}
