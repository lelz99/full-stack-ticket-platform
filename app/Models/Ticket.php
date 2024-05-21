<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'category', 'description', 'user_id'];

    // Modifica visualizzazione data e ora
    public function getCreatedAt()
    {
        return Carbon::create($this->created_at)->format('H:i:s d-m-Y');
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
