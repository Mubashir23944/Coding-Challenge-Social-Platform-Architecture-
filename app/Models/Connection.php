<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Connection extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['first_connection_name', 'second_connection_name']; //Accessors

    //--------------------------Accessors----------------------------------------------------

    protected function firstConnectionName(): Attribute //Sender Name Accessor for MEaningful Display of Data
    {
        return Attribute::make(
            get: fn ($value) => User::find($this->connection_1),
        );
    }

    protected function secondConnectionName(): Attribute //Receiver Name Accessor for MEaningful Display of Data
    {
        return Attribute::make(
            get: fn ($value) => User::find($this->connection_2),
        );
    }

    //--------------------------Relations----------------------------------------------------
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
    //--------------------------Queries------------------------------------------------------
    public static function acceptConnectionRequest($payload) //A New Connection Get Created
    {
        Connection::create($payload);
    }
}
