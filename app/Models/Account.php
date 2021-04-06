<?php

namespace App\Models;

use HepplerDotNet\FullTextSearch\FullTextSearch;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory, FullTextSearch;

    protected $guarded = ['id'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    protected $searchable = [
        'fullname',
        'email',
    ];
    protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class)->without('accounts');
    }
}
