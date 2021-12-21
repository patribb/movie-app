<?php

namespace App\Models;

use App\Models\Season;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Episode extends Model
{
    use HasFactory;
    protected $fillable = ['season_id', 'tmdb_id', 'name', 'slug', 'episode_number', 'overview', 'is_public', 'visits'];

    public function season()
    {
        return $this->belongsTo(Season::class);
    }
}
