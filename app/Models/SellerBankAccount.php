<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


/**
 * App\Models\SellerBankAccount
 *
 * @property int $id
 * @property int $seller_id
 * @property int $bank_id
 * @property string|null $account_name
 * @property string|null $account_number
 * @property string|null $iban
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Models\Bank|null $bank
 * @property-read \App\Models\Seller|null $seller
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount newQuery()
 * @method static \Illuminate\Database\Query\Builder|SellerBankAccount onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount query()
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereAccountNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereBankId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereIban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereSellerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SellerBankAccount whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|SellerBankAccount withTrashed()
 * @method static \Illuminate\Database\Query\Builder|SellerBankAccount withoutTrashed()
 * @mixin \Eloquent
 */
class SellerBankAccount extends Model
{

    use SoftDeletes;
    protected $table = 'sellers_banks_accounts';
    protected $fillable = ['seller_id', 'bank_id', 'account_name', 'account_number', 'iban'];
    protected $hidden = ['updated_at', 'deleted_at'];
    // protected $with = ["product"];

    public function seller()
    {
        return $this->belongsTo(Seller::class)->withTrashed();
    }

    public function bank()
    {
        return $this->belongsTo(Bank::class)->withTrashed();
    }


}
