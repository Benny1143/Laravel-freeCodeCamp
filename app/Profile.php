<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        return '/storage/' . ($this->image ? $this->image : 'uploads/lowTy1PEHG0WaYL8kvquIk3QxLiYiNNa2SInLApU.png');
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
