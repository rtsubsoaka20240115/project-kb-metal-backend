<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SubarugDegreasingRecord
 * 
 * @property string|null $tonyu_time
 * @property string|null $tonyusha
 * @property string|null $shorishu1
 * @property string|null $rack1
 * @property string|null $shorishu2
 * @property string|null $rack2
 * @property string|null $shorishu3
 * @property string|null $rack3
 * @property string|null $shorishu4
 * @property string|null $rack4
 * @property string|null $shorishu5
 * @property string|null $rack5
 * @property Carbon|null $shori_start_date
 *
 * @package App\Models
 */
class SubarugDegreasingRecord extends Model
{
	protected $table = 'subarug_degreasing_records';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'shori_start_date' => 'datetime'
	];

	protected $fillable = [
		'tonyu_time',
		'tonyusha',
		'shorishu1',
		'rack1',
		'shorishu2',
		'rack2',
		'shorishu3',
		'rack3',
		'shorishu4',
		'rack4',
		'shorishu5',
		'rack5',
		'shori_start_date'
	];
}
