<?php

namespace App\Models;

use App\UserTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\ChatMessage
 *
 * @property int $id
 * @property int|null $chat_id
 * @property int $sender_id
 * @property string|null $message
 * @property int $read_at 0 notfreez, 1freez
 * @property int $type 0 text, 1 image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Chat|null $chat
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage newQuery()
 * @method static \Illuminate\Database\Query\Builder|ChatMessage onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereChatId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereReadAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereSenderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ChatMessage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|ChatMessage withTrashed()
 * @method static \Illuminate\Database\Query\Builder|ChatMessage withoutTrashed()
 * @mixin \Eloquent
 */
class ChatMessage extends Model
{
    use SoftDeletes;
    public $table = 'chat_message';
    protected $fillable  = ['chat_id', 'sender_id', 'message', 'read_at', 'type'];
    protected $hidden   = ['updated_at','deleted_at'];


    public function getMessageAttribute($message)  {

        if($this->type==1){
            return url('uploads/chats/'.$message);
        }else{
            return $message;
        }
    }

    public function chat(){
        return $this->belongsTo(Chat::class);
    }


    public function user(){
        return $this->belongsTo(\App\Models\User::class, 'sender_id');
    }



}
