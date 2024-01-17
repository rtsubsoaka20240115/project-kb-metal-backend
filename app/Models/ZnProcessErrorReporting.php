<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ZnProcessErrorReporting
 * 
 * @property int $shiji_no
 * @property string $shiji_meisai_no
 * @property string|null $kyakusaki
 * @property string|null $shorishu
 * @property string|null $fuguai_bunrui
 * @property string|null $fuguai_naiyo
 * @property int|null $fuguaisu
 * @property string|null $shochi
 * @property string|null $nouki_chosei
 * @property string|null $kensain
 * @property string|null $hiduke
 *
 * @package App\Models
 */
class ZnProcessErrorReporting extends Model
{
	protected $table = 'zn_process_error_reportings';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'shiji_no' => 'int',
		'fuguaisu' => 'int'
	];

	protected $fillable = [
		'shiji_no',
		'shiji_meisai_no',
		'kyakusaki',
		'shorishu',
		'fuguai_bunrui',
		'fuguai_naiyo',
		'fuguaisu',
		'shochi',
		'nouki_chosei',
		'kensain',
		'hiduke'
	];
}
