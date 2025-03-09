<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Notifications\Notifiable;

class Character extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'enemy',
        'defence',
        'strength',
        'accuracy',
        'magic',
        'userid',
    ];
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /*
    public function contests(): BelongsToMany
    {
        return $this->belongsToMany(Contest::class, 'character_contest')
            ->withPivot('contest_id')
            ->orWhereIn('id', function ($query) {
                $query->select('enemy_id')
                      ->from('character_contest')
                      ->where('character_id', $this->getKey());
            })
            ->withTimestamps();
    }
    */
    
    public function contests(): BelongsToMany
    {
        return $this->belongsToMany(Contest::class, 'character_contest')->withPivot('contest_id')->withTimestamps();
    }
      
}
