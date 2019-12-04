<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = 'movies';
    public $primaryKey = 'id';

    protected $dates = [ 'release_date',];

    public $guarded = [];

    public function getGenreName(): string
    {
        if ($this->genre_id) {
            $genre = Genre::find($this->genre_id);
            return $genre->name;
        }

        return 'Sin Genero';
    }

    public function genre()
    {
        //return $this->belongsTo('App\Genre');
        //return $this->belongsTo(Genre::class);
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    public function actors()
    {
        return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }

    public function soyFavoritoDe()
    {
        return $this->hasMany(Actor:class, 'favourite_movie_id');
    }

    public function releaseDate()
    {
        return $this->release_date->format('Y-m-d');
    }






}
