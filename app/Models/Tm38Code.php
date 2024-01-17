<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm38Code
 * 
 * @property int $ID
 * @property int|null $tm38_Kbn
 * @property int|null $tm38_Code
 * @property string|null $tm38_Name
 * @property Carbon|null $tm38_RegistDate
 * @property Carbon|null $tm38_UpdateDate
 * @property int|null $tm38_RegistTantoCode
 * @property int|null $tm38_UpdateTantoCode
 * @property string|null $tm38_Memo
 *
 * @package App\Models
 */
class Tm38Code extends Model
{
	protected $table = 'tm38_Code';
	protected $primaryKey = 'ID';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'ID' => 'int',
		'tm38_Kbn' => 'int',
		'tm38_Code' => 'int',
		'tm38_RegistDate' => 'datetime',
		'tm38_UpdateDate' => 'datetime',
		'tm38_RegistTantoCode' => 'int',
		'tm38_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tm38_Kbn',
		'tm38_Code',
		'tm38_Name',
		'tm38_RegistDate',
		'tm38_UpdateDate',
		'tm38_RegistTantoCode',
		'tm38_UpdateTantoCode',
		'tm38_Memo'
	];
}
