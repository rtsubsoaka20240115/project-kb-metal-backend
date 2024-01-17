<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm35OutsourcingSettei
 * 
 * @property int $tm35_Code
 * @property int|null $tm35_NoukiDay
 * @property float|null $tm35_JuchuTanka
 * @property int|null $tm35_IraiMeisaiMaxRow
 * @property string|null $tm35_EXEPath
 * @property string|null $tm35_EXESetupPath
 * @property string|null $tm35_JissekiUnchin
 * @property string|null $tm35_JissekiItakuJikan
 *
 * @package App\Models
 */
class Tm35OutsourcingSettei extends Model
{
	protected $table = 'tm35_OutsourcingSettei';
	protected $primaryKey = 'tm35_Code';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm35_Code' => 'int',
		'tm35_NoukiDay' => 'int',
		'tm35_JuchuTanka' => 'float',
		'tm35_IraiMeisaiMaxRow' => 'int'
	];

	protected $fillable = [
		'tm35_NoukiDay',
		'tm35_JuchuTanka',
		'tm35_IraiMeisaiMaxRow',
		'tm35_EXEPath',
		'tm35_EXESetupPath',
		'tm35_JissekiUnchin',
		'tm35_JissekiItakuJikan'
	];
}
