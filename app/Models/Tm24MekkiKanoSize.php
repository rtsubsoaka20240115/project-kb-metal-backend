<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm24MekkiKanoSize
 * 
 * @property int $tm24_MekkishuCode
 * @property float|null $tm24_Height
 * @property float|null $tm24_Width
 * @property float|null $tm24_Thick
 * @property float|null $tm24_Weight
 * @property Carbon|null $tm24_RegistDate
 * @property Carbon|null $tm24_UpdateDate
 * @property int|null $tm24_UpdateTantoCode
 *
 * @package App\Models
 */
class Tm24MekkiKanoSize extends Model
{
	protected $table = 'tm24_MekkiKanoSize';
	protected $primaryKey = 'tm24_MekkishuCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm24_MekkishuCode' => 'int',
		'tm24_Height' => 'float',
		'tm24_Width' => 'float',
		'tm24_Thick' => 'float',
		'tm24_Weight' => 'float',
		'tm24_RegistDate' => 'datetime',
		'tm24_UpdateDate' => 'datetime',
		'tm24_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm24_Height',
		'tm24_Width',
		'tm24_Thick',
		'tm24_Weight',
		'tm24_RegistDate',
		'tm24_UpdateDate',
		'tm24_UpdateTantoCode'
	];
}
