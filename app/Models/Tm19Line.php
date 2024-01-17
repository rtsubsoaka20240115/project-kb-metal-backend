<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tm19Line
 * 
 * @property int $tm19_LineCode
 * @property string|null $tm19_LineName
 * @property string|null $tm19_RyakuName
 * @property bool|null $tm19_JiguNoInputFlg
 * @property int|null $tm19_SagyoCode1
 * @property int|null $tm19_SagyoCode2
 * @property int|null $tm19_SagyoCode3
 * @property int|null $tm19_SagyoCode4
 * @property int|null $tm19_SagyoCode5
 * @property int|null $tm19_SagyoCode6
 * @property int|null $tm19_SagyoCode7
 * @property int|null $tm19_SagyoCode8
 * @property int|null $tm19_SagyoCode9
 * @property int|null $tm19_SagyoCode10
 * @property int|null $tm19_SagyoCode11
 * @property int|null $tm19_SagyoCode12
 * @property int|null $tm19_SagyoCode13
 * @property int|null $tm19_SagyoCode14
 * @property int|null $tm19_SagyoCode15
 * @property int|null $tm19_SagyoCode16
 * @property int|null $tm19_SagyoCode17
 * @property int|null $tm19_SagyoCode18
 * @property int|null $tm19_SagyoCode19
 * @property int|null $tm19_SagyoCode20
 * @property int|null $tm19_SagyoCode21
 * @property int|null $tm19_SagyoCode22
 * @property int|null $tm19_SagyoCode23
 * @property int|null $tm19_SagyoCode24
 * @property int|null $tm19_SagyoCode25
 * @property int|null $tm19_SagyoCode26
 * @property int|null $tm19_SagyoCode27
 * @property int|null $tm19_SagyoCode28
 * @property int|null $tm19_SagyoCode29
 * @property int|null $tm19_SagyoCode30
 * @property int|null $tm19_SagyoCode31
 * @property int|null $tm19_SagyoCode32
 * @property int|null $tm19_SagyoCode33
 * @property int|null $tm19_SagyoCode34
 * @property int|null $tm19_SagyoCode35
 * @property int|null $tm19_SagyoCode36
 * @property int|null $tm19_SagyoCode37
 * @property int|null $tm19_SagyoCode38
 * @property int|null $tm19_SagyoCode39
 * @property int|null $tm19_SagyoCode40
 * @property Carbon|null $tm19_RegistDate
 * @property Carbon|null $tm19_UpdateDate
 * @property int|null $tm19_UpdateTantoCode
 * @property bool|null $tm19_IoTTargetFlag
 *
 * @package App\Models
 */
class Tm19Line extends Model
{
	protected $table = 'tm19_Line';
	protected $primaryKey = 'tm19_LineCode';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tm19_LineCode' => 'int',
		'tm19_JiguNoInputFlg' => 'bool',
		'tm19_SagyoCode1' => 'int',
		'tm19_SagyoCode2' => 'int',
		'tm19_SagyoCode3' => 'int',
		'tm19_SagyoCode4' => 'int',
		'tm19_SagyoCode5' => 'int',
		'tm19_SagyoCode6' => 'int',
		'tm19_SagyoCode7' => 'int',
		'tm19_SagyoCode8' => 'int',
		'tm19_SagyoCode9' => 'int',
		'tm19_SagyoCode10' => 'int',
		'tm19_SagyoCode11' => 'int',
		'tm19_SagyoCode12' => 'int',
		'tm19_SagyoCode13' => 'int',
		'tm19_SagyoCode14' => 'int',
		'tm19_SagyoCode15' => 'int',
		'tm19_SagyoCode16' => 'int',
		'tm19_SagyoCode17' => 'int',
		'tm19_SagyoCode18' => 'int',
		'tm19_SagyoCode19' => 'int',
		'tm19_SagyoCode20' => 'int',
		'tm19_SagyoCode21' => 'int',
		'tm19_SagyoCode22' => 'int',
		'tm19_SagyoCode23' => 'int',
		'tm19_SagyoCode24' => 'int',
		'tm19_SagyoCode25' => 'int',
		'tm19_SagyoCode26' => 'int',
		'tm19_SagyoCode27' => 'int',
		'tm19_SagyoCode28' => 'int',
		'tm19_SagyoCode29' => 'int',
		'tm19_SagyoCode30' => 'int',
		'tm19_SagyoCode31' => 'int',
		'tm19_SagyoCode32' => 'int',
		'tm19_SagyoCode33' => 'int',
		'tm19_SagyoCode34' => 'int',
		'tm19_SagyoCode35' => 'int',
		'tm19_SagyoCode36' => 'int',
		'tm19_SagyoCode37' => 'int',
		'tm19_SagyoCode38' => 'int',
		'tm19_SagyoCode39' => 'int',
		'tm19_SagyoCode40' => 'int',
		'tm19_RegistDate' => 'datetime',
		'tm19_UpdateDate' => 'datetime',
		'tm19_UpdateTantoCode' => 'int',
		'tm19_IoTTargetFlag' => 'bool'
	];

	protected $fillable = [
		'tm19_LineName',
		'tm19_RyakuName',
		'tm19_JiguNoInputFlg',
		'tm19_SagyoCode1',
		'tm19_SagyoCode2',
		'tm19_SagyoCode3',
		'tm19_SagyoCode4',
		'tm19_SagyoCode5',
		'tm19_SagyoCode6',
		'tm19_SagyoCode7',
		'tm19_SagyoCode8',
		'tm19_SagyoCode9',
		'tm19_SagyoCode10',
		'tm19_SagyoCode11',
		'tm19_SagyoCode12',
		'tm19_SagyoCode13',
		'tm19_SagyoCode14',
		'tm19_SagyoCode15',
		'tm19_SagyoCode16',
		'tm19_SagyoCode17',
		'tm19_SagyoCode18',
		'tm19_SagyoCode19',
		'tm19_SagyoCode20',
		'tm19_SagyoCode21',
		'tm19_SagyoCode22',
		'tm19_SagyoCode23',
		'tm19_SagyoCode24',
		'tm19_SagyoCode25',
		'tm19_SagyoCode26',
		'tm19_SagyoCode27',
		'tm19_SagyoCode28',
		'tm19_SagyoCode29',
		'tm19_SagyoCode30',
		'tm19_SagyoCode31',
		'tm19_SagyoCode32',
		'tm19_SagyoCode33',
		'tm19_SagyoCode34',
		'tm19_SagyoCode35',
		'tm19_SagyoCode36',
		'tm19_SagyoCode37',
		'tm19_SagyoCode38',
		'tm19_SagyoCode39',
		'tm19_SagyoCode40',
		'tm19_RegistDate',
		'tm19_UpdateDate',
		'tm19_UpdateTantoCode',
		'tm19_IoTTargetFlag'
	];
}
