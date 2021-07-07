<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;


class CategoryService
{
    private $url = "https://be-dts-publikasi.herokuapp.com/category";

    public function getCategory()
    {
        return Http::get($this->url);
    }
    public function addCategory($data)
    {
        return Http::post($this->url.'/save', $data);
    }

    public function showOneCategory($id)
    {
        return Http::get($this->url . '/' . $id);
    }

    public function updateCategory($id, $data)
    {
        return Http::put($this->url . '/' . $id . '/update', $data);
    }
    public function deleteCategory($id)
    {
        return Http::delete($this->url . '/' . $id . '/delete');
    }
}
