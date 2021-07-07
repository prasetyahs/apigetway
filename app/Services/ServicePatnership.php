<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class ServicePatnership
{
    private $url = "https://dts-patnership.herokuapp.com/patnership";

    public function getPatnership()
    {
        return Http::get($this->url);
    }
    public function addPatnership()
    {
        return Http::post($this->url);
    }

    public function showOnePatnership($id)
    {
        return Http::get($this->url . '/' . $id);
    }

    public function updatePatnership($id)
    {
        return Http::put($this->url . '/' . $id);
    }
    public function deletePatnership($id)
    {
        return Http::delete($this->url . '/' . $id);
    }
}
