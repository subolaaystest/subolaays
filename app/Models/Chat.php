<?php

namespace App\Models;

use App\UserTranslation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Models\Chat
 *
 * @property int $id
 * @property int|null $seller_id
 * @property int $buyer_id
 * @property string|null $type
 * @property int $delete
 * @property int $freez 0 notfreez, 1freez
 * @property string|null $last_seen
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Buyer|null $buyer
 * @property-read mixed $last_message
 * @property-read mixed $total_unread
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ChatMessage[] $messages
 * @property-read int|null $messages_count
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat newQuery()
 * @method static \Illuminate\Database\Query\Builder|Chat onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat query()
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereBuyerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereDelete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereFreez($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereLastSeen($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Chat whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|Chat withTrashed()
 * @method static \Illuminate\Database\Query\Builder|Chat withoutTrashed()
 * @mixin \Eloquent
 */
class Chat extends Model
{

    use SoftDeletes;
    public $table = 'chats';
    protected $hidden   = ['updated_at','deleted_at','userobject2','userobject1'];
    protected $fillable  = ['seller_id', 'buyer_id', 'type', 'delete', 'freez', 'last_seen'];
   protected $appends = ['last_message', 'total_unread', 'seller', 'buyer'];



    public function messages(){
        return $this->hasMany(ChatMessage::class, 'chat_id');
    }


    public function seller(){
        return $this->belongsTo(Seller::class);
    }


    public function buyer(){
        return $this->belongsTo(Buyer::class);
    }


   public function getTotalUnreadAttribute()
   {
    return (string)$this->messages()->where('read_at',0)->count();
   }


    public function getLastMessageAttribute()
    {
        if($this->messages()->orderByDesc('id')->first()->type == 1){
            return __('website.sent_image');
        }
        return $this->messages()->orderByDesc('id')->first()->message;
    }






}
