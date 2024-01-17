<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm12HinNameBunrui
 * 
 * @property int $tm12_HinNameBunruiCode
 * @property string|null $tm12_HinNameBunruiName
 * @property int|null $tm12_BumonCode
 * @property Carbon|null $tm12_RegistDate
 * @property Carbon|null $tm12_UpdateDate
 * @property int|null $tm12_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm12HinNameBunrui extends Model
{
	protected $table = 'tm12_HinNameBunrui';
	protected $primaryKey = 'tm12_HinNameBunruiCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm12_HinNameBunruiCode' => 'int',
		'tm12_BumonCode' => 'int',
		'tm12_RegistDate' => 'datetime',
		'tm12_UpdateDate' => 'datetime',
		'tm12_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm12_HinNameBunruiName',
		'tm12_BumonCode',
		'tm12_RegistDate',
		'tm12_UpdateDate',
		'tm12_UpdateTantoCode'
	];
}
