<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PartialPaymentRecord
 * 
 * @property string|null $shiji_no
 * @property string|null $shiji_meisai_no
 * @property string|null $kyakusaki
 * @property string|null $shorishu
 * @property string|null $bunnousu
 * @property string|null $kensain
 * @property string|null $hiduke
 *
 * @package App\Models
 */
class PartialPaymentRecord extends Model
{
	protected $table = 'partial_payment_records';
	public $incrementing = false;
	public $timestamps = false;

	protected $fillable = [
		'shiji_no',
		'shiji_meisai_no',
		'kyakusaki',
		'shorishu',
		'bunnousu',
		'kensain',
		'hiduke'
	];
}
