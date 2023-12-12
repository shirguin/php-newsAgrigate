<?php

declare(strict_types=1);

namespace App\Http\Controllers;

trait CategoriesTrait
{
    public function getCategories(int $id = null): array
    {
        $categories = [];
        $quantityCategories = 5;

        if ($id === null) {
            for ($i = 1; $i < $quantityCategories; $i++) {
                $categories[] = [
                    "id" => $i,
                    "title" => \fake()->jobTitle(),
                    "created_at" => \now()->format("d-m-Y H:i"),
                ];
            }
            return $categories;
        }

        return [
            "id" => $id,
            "title" => \fake()->jobTitle(),
            "created_at" => \now()->format("d-m-Y H:i"),
        ];

    }
}