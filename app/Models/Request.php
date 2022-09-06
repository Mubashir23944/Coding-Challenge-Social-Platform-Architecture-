<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['sender_name', 'receiver_name']; //Accessors

    //--------------------------Accessors----------------------------------------------------

    protected function senderName(): Attribute //Sender Name Accessor for MEaningful Display of Data
    {
        return Attribute::make(
            get: fn ($value) => User::find($this->sender_id),
        );
    }

    protected function receiverName(): Attribute //Receiver Name Accessor for MEaningful Display of Data
    {
        return Attribute::make(
            get: fn ($value) => User::find($this->receiver_id),
        );
    }

    //--------------------------Scopes----------------------------------------------------

    public function scopeSent($query) // sent request scope
    {
        return $query->where('sender_id', auth()->user()->id);
    }

    public function scopeReceived($query) // received request scope
    {
        return $query->where('receiver_id', auth()->user()->id);
    }

    //--------------------------Queries----------------------------------------------------

    public static function createConnectionRequest($payload) //Request Modal Function for creating new connection request
    {
        return Request::create($payload);
    }

    public static function deleteConnectionRequest($payload) //Request Modal Function for creating new connection request
    {
        return Request::where('sender_id', $payload['sender_id'])
            ->where('receiver_id', $payload['receiver_id'])
            ->delete();
    }
}
