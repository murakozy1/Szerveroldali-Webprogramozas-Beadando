<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;
    protected $fillable = [
        'connected'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class);
    }
    /*
    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class,'character_contest','character_id','contest_id');
    }
    */

    public function characters(): BelongsToMany
    {
        return $this->belongsToMany(Character::class)->withPivot('character_id')->withTimestamps();
    }

    public function enemies(): BelongsToMany
    {
        return $this->belongsToMany(Character::class)->withPivot('enemy_id')->withTimestamps();
    }

    /*
    public function enemies(): BelongsToMany
    {
        return $this->belongsToMany(Character::class,'character_contest','enemy_id','contest_id');
    }
    */


}
