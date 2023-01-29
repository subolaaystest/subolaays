<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Setting
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $mobile
 * @property string|null $whatsapp
 * @property string|null $facebook
 * @property string|null $twitter
 * @property string|null $linked_in
 * @property string|null $instagram
 * @property string|null $snapchat
 * @property string|null $telegram
 * @property string|null $youtube
 * @property string|null $logo
 * @property string|null $image
 * @property int $order_point
 * @property int $share_points
 * @property int $deal_points
 * @property int $stories_count
 * @property int $deals_count
 * @property int $daily_stories_count
 * @property int $daily_deals_count
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\SettingTranslation|null $translation
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SettingTranslation[] $translations
 * @property-read int|null $translations_count
 * @method static \Illuminate\Database\Eloquent\Builder|Setting listsTranslations(string $translationField)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting notTranslatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting orWhereTranslation(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting orWhereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting orderByTranslation(string $translationField, string $sortMethod = 'asc')
 * @method static \Illuminate\Database\Eloquent\Builder|Setting query()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting translated()
 * @method static \Illuminate\Database\Eloquent\Builder|Setting translatedIn(?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDailyDealsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDailyStoriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDealPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereDealsCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereFacebook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLinkedIn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereOrderPoint($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSharePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereSnapchat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereStoriesCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTelegram($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTranslation(string $translationField, $value, ?string $locale = null, string $method = 'whereHas', string $operator = '=')
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTranslationLike(string $translationField, $value, ?string $locale = null)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereTwitter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereWhatsapp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting whereYoutube($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Setting withTranslation()
 * @mixin \Eloquent
 */
class Setting extends Model
{

    use Translatable;
    public $translatedAttributes = ['title', 'description', 'keywords'];
    protected $fillable = ['email', 'phone', 'mobile', 'whatsapp', 'facebook', 'twitter', 'linked_in', 'instagram', 'snapchat',
    'telegram', 'youtube', 'logo', 'image', 'order_point', 'share_points', 'deal_points', 'stories_count', 'deals_count', 'daily_stories_count', 'daily_deals_count'];

    protected $hidden = ['created_at', 'updated_at', 'translations'];


    public function getLogoAttribute($logo)
    {
        return !is_null($logo)?url('uploads/settings/'.$logo):null;
    }

    public function getImageAttribute($image)
    {
        return !is_null($image)?url('uploads/settings/'.$image):null;
    }


}
