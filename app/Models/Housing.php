<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Housing
 *
 * @property int $id
 * @property int $category_id
 * @property int $status
 * @property string $name
 * @property string|null $description Описание объекта
 * @property int $max_floor этаж
 * @property int $star Количество звезд
 * @property string|null $contact_person Контактное лицо
 * @property string|null $phone Контактный номер телефона
 * @property string|null $_phone Альтернативный номер телефона
 * @property int $represent_management Вы представляете управляющую компанию, или ваш объект размещения — часть группы или сети?
 * @property string|null $company_name Название компании, группы или сети
 * @property int $city_id
 * @property string|null $address
 * @property string|null $_address
 * @property string|null $lat
 * @property string|null $lng
 * @property string|null $postal_code Почтовый индекс
 * @property string|null $cancel_fine_day отменить бронирование
 * @property string|null $required_pay гостям будет необходимо оплатить 100%
 * @property string|null $parking
 * @property string|null $parking_property Частная или Общественная
 * @property string|null $parking_location На территории или За пределами территории
 * @property string|null $parking_booking Нужно бронировать или Не нужно бронировать
 * @property float|null $parking_price Цена за парковочное место
 * @property string|null $breakfast
 * @property int $children_allowed Размещение детей
 * @property string $pet Размещение домашних животных
 * @property int $pet_charge дополнительная плата
 * @property float|null $pet_price плата за домашних животных
 * @property string|null $check_in_from Регистрация заезда  с
 * @property string|null $check_in_before Регистрация заезда  До
 * @property string|null $check_out_from Регистрация отъезда с
 * @property string|null $check_out_before Регистрация отъезда До
 * @property int|null $pos_terminal
 * @property string|null $invoice_name
 * @property string|null $invoice_company_name
 * @property int $recipient_invoice У получателя счетов тот же адрес
 * @property int|null $recipient_invoice_city_id Город получателя счетов
 * @property string|null $recipient_invoice_address Адрес получателя счетов
 * @property string|null $recipient_invoice_postal_code Почтовый индекс получателя счетов
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|Housing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Housing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Housing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereBreakfast($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCancelFineDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCheckInBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCheckInFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCheckOutBefore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCheckOutFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereChildrenAllowed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereInvoiceCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereInvoiceName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereLat($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereLng($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereMaxFloor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereParking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereParkingBooking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereParkingLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereParkingPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereParkingProperty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePetCharge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePetPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePosTerminal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereRecipientInvoice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereRecipientInvoiceAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereRecipientInvoiceCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereRecipientInvoicePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereRepresentManagement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereRequiredPay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereStar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property string|null $alt_phone Альтернативный номер телефона
 * @property string|null $alt_address
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HousingBreakfast[] $breakfasts
 * @property-read int|null $breakfasts_count
 * @property-read \App\Models\Category $category
 * @property-read \App\Models\City $city
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HousingComfort[] $comforts
 * @property-read int|null $comforts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HousingImage[] $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\HousingLanguage[] $languages
 * @property-read int|null $languages_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Room[] $rooms
 * @property-read int|null $rooms_count
 * @method static \Database\Factories\HousingFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereAltAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Housing whereAltPhone($value)
 */
class Housing extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','category_id','status','name','description','max_floor','star','contact_person','phone','alt_phone'.
        'represent_management','company_name','city_id','address','alt_address','lat','lng',
        'postal_code','cancel_fine_day','required_pay',
        'parking','parking_property','parking_location','parking_booking',
        'parking_price','breakfast','children_allowed',
        'pet','pet_charge','pet_price',
        'check_in_from','check_in_before','check_out_from','check_out_before',
        'pos_terminal','invoice_name','invoice_company_name','recipient_invoice','recipient_invoice_city_id',
        'recipient_invoice_address','recipient_invoice_postal_code'
    ];

    public function city():BelongsTo
    {
        return  $this->belongsTo(City::class);
    }
    public function recipientInvoiceCity():BelongsTo
    {
        return  $this->belongsTo(City::class);
    }
    public function category():BelongsTo
    {
        return  $this->belongsTo(Category::class);
    }
    public function images():HasMany
    {
        return  $this->hasMany(HousingImage::class);
    }
    public function breakfasts():HasMany
    {
        return  $this->hasMany(HousingBreakfast::class);
    }
    public function comforts():HasMany
    {
        return  $this->hasMany(HousingComfort::class);
    }
    public function languages():HasMany
    {
        return  $this->hasMany(HousingLanguage::class);
    }
    public function rooms():HasMany
    {
        return  $this->hasMany(Room::class);
    }
    public function reviews():HasMany
    {
        return  $this->hasMany(Review::class);
    }
}
