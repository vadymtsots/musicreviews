<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Review
{

    public $title;

    public $creation_date;

    public $body;

    public $slug;

    /**
     * Review constructor.
     * @param $title
     * @param $creation_date
     * @param $body
     * @param $slug
     */
    public function __construct($title, $creation_date, $body, $slug)
    {
        $this->title = $title;
        $this->creation_date = $creation_date;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function getSingleReview($slug)
    {
        return static::getAllReviews()->firstWhere('slug', $slug);
    }

    public static function getAllReviews()
    {
       /* $files = File::files(resource_path("reviews"));

        return array_map(fn($file) => $file->getContents(), $files); */

       return $reviews = collect(File::files(resource_path("reviews")))
            ->map(fn($file) => YamlFrontMatter::parseFile($file))
            ->map(fn($document) => new Review(
                $document->title,
                $document->creation_date,
                $document->body(),
                $document->slug
            ));
    }
}
