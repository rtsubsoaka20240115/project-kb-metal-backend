<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td007MasterDataUpdateLog
 * 
 * @property int $td007_Id
 * @property string|null $td007_Target
 * @property Carbon|null $td007_UpdateDatetime
 * @property string|null $td007_TableName
 * @property string|null $td007_FieldName
 * @property string|null $td007_BeforeValue
 * @property string|null $td007_AfterValue
 * @property int|null $td007_UpdateTantoCode
 *
 * @package App\Models
 */
class Td007MasterDataUpdateLog extends Model
{
	protected $table = 'td007_MasterDataUpdateLog';
	protected $primaryKey = 'td007_Id';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'td007_Id' => 'int',
		'td007_UpdateDatetime' => 'datetime',
		'td007_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'td007_Target',
		'td007_UpdateDatetime',
		'td007_TableName',
		'td007_FieldName',
		'td007_BeforeValue',
		'td007_AfterValue',
		'td007_UpdateTantoCode'
	];
}
