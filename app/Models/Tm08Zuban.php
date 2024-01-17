<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm08Zuban
 * 
 * @property int $tm08_ZubanCode
 * @property int|null $tm08_TokuisakiCode
 * @property string|null $tm08_Zuban
 * @property string|null $tm08_HinName
 * @property string|null $tm08_RyakuName
 * @property string|null $tm08_SearchKana
 * @property string|null $tm08_Biko
 * @property Carbon|null $tm08_RegistDate
 * @property Carbon|null $tm08_UpdateDate
 * @property int|null $tm08_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm08Zuban extends Model
{
	protected $table = 'tm08_Zuban';
	protected $primaryKey = 'tm08_ZubanCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm08_ZubanCode' => 'int',
		'tm08_TokuisakiCode' => 'int',
		'tm08_RegistDate' => 'datetime',
		'tm08_UpdateDate' => 'datetime',
		'tm08_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm08_TokuisakiCode',
		'tm08_Zuban',
		'tm08_HinName',
		'tm08_RyakuName',
		'tm08_SearchKana',
		'tm08_Biko',
		'tm08_RegistDate',
		'tm08_UpdateDate',
		'tm08_UpdateTantoCode'
	];
}
