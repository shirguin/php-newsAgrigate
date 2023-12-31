<?php

declare(strict_types=1);

namespace App\Http\Controllers;

trait NewsTrait
{
    public function getNews(int $id_category, int $id = null): array
    {
        $news = [];
        $quantityNews = 10;

        if ($id === null) {
            for ($i = 1; $i < $quantityNews; $i++) {
                $news[] = [
                    "id" => $i,
                    "id_category" => $id_category,
                    "title" => \fake()->jobTitle(),
                    "description" => \fake()->text(100),
                    "author" => \fake()->userName(),
                    "created_at" => \now()->format("d-m-Y H:i"),
                ];
            }
            return $news;
        }

        return [
            "id" => $id,
            "id_category" => $id_category,
            "title" => \fake()->jobTitle(),
            "description" => \fake()->text(100),
            "author" => \fake()->userName(),
            "created_at" => \now()->format("d-m-Y H:i"),
        ];
    }
}