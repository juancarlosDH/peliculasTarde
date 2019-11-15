<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = 'movies';
    public $primaryKey = 'id';

    public $guarded = [];

    public function getGenreName(): string
    {
        if ($this->genre_id) {
            $genre = Genre::find($this->genre_id);
            return $genre->name;
        }

        return 'Sin Genero';
    }





}
