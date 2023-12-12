<?php

declare(strict_types=1); //Включение строгой типизации

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    use NewsTrait;

    public function index(int $id_category)
    {
        return \view("news.index", [
            "news" => $this->getNews($id_category),
        ]);
    }

    public function show(int $id_category, int $id)
    {
        return $this->getNews($id_category, $id);
    }
}
