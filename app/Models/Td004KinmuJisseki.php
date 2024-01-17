<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Td004KinmuJisseki
 * 
 * @property int $id
 * @property int $td004_SyainCode
 * @property Carbon $td004_KinmuDate
 * @property float|null $td004_KinmuTime
 * @property float|null $td004_JikangaiTime
 * @property int|null $td004_OenBushoCode
 * @property float|null $td004_OenKinmuTime
 * @property float|null $td004_OenJikangaiTime
 * @property float|null $td004_KanTime1
 * @property float|null $td004_KanTime2
 * @property float|null $td004_KanTime3
 * @property float|null $td004_KanTime4
 * @property float|null $td004_KanTime5
 * @property float|null $td004_KanTime6
 * @property float|null $td004_KanTime7
 * @property float|null $td004_KanTime8
 * @property float|null $td004_KanTime9
 * @property float|null $td004_KanJikangaiTime
 * @property float|null $td004_ChokuTime1
 * @property float|null $td004_ChokuTime2
 * @property float|null $td004_ChokuTime3
 * @property float|null $td004_ChokuTime4
 * @property float|null $td004_ChokuTime5
 * @property float|null $td004_ChokuTime6
 * @property float|null $td004_ChokuTime7
 * @property float|null $td004_ChokuJikangaiTime
 * @property float|null $td004_OenTime1
 * @property float|null $td004_OenTime2
 * @property float|null $td004_OenTime3
 * @property float|null $td004_OenTime4
 * @property float|null $td004_OenTime5
 * @property float|null $td004_OenTime6
 * @property float|null $td004_OenTime7
 * @property bool|null $td004_Chikoku
 * @property bool|null $td004_Gaisyutsu
 * @property bool|null $td004_Soutai
 * @property bool|null $td004_Kesseki
 * @property Carbon|null $td004_RegistDate
 * @property Carbon|null $td004_UpdateDate
 * @property int|null $td004_UpdateTantoCode
 * @property int|null $td004_FileStatus
 *
 * @package App\Models
 */
class Td004KinmuJisseki extends Model
{
	protected $table = 'td004_KinmuJisseki';
	public $timestamps = false;

	protected $casts = [
		'td004_SyainCode' => 'int',
		'td004_KinmuDate' => 'datetime',
		'td004_KinmuTime' => 'float',
		'td004_JikangaiTime' => 'float',
		'td004_OenBushoCode' => 'int',
		'td004_OenKinmuTime' => 'float',
		'td004_OenJikangaiTime' => 'float',
		'td004_KanTime1' => 'float',
		'td004_KanTime2' => 'float',
		'td004_KanTime3' => 'float',
		'td004_KanTime4' => 'float',
		'td004_KanTime5' => 'float',
		'td004_KanTime6' => 'float',
		'td004_KanTime7' => 'float',
		'td004_KanTime8' => 'float',
		'td004_KanTime9' => 'float',
		'td004_KanJikangaiTime' => 'float',
		'td004_ChokuTime1' => 'float',
		'td004_ChokuTime2' => 'float',
		'td004_ChokuTime3' => 'float',
		'td004_ChokuTime4' => 'float',
		'td004_ChokuTime5' => 'float',
		'td004_ChokuTime6' => 'float',
		'td004_ChokuTime7' => 'float',
		'td004_ChokuJikangaiTime' => 'float',
		'td004_OenTime1' => 'float',
		'td004_OenTime2' => 'float',
		'td004_OenTime3' => 'float',
		'td004_OenTime4' => 'float',
		'td004_OenTime5' => 'float',
		'td004_OenTime6' => 'float',
		'td004_OenTime7' => 'float',
		'td004_Chikoku' => 'bool',
		'td004_Gaisyutsu' => 'bool',
		'td004_Soutai' => 'bool',
		'td004_Kesseki' => 'bool',
		'td004_RegistDate' => 'datetime',
		'td004_UpdateDate' => 'datetime',
		'td004_UpdateTantoCode' => 'int',
		'td004_FileStatus' => 'int'
	];

	protected $fillable = [
		'td004_SyainCode',
		'td004_KinmuDate',
		'td004_KinmuTime',
		'td004_JikangaiTime',
		'td004_OenBushoCode',
		'td004_OenKinmuTime',
		'td004_OenJikangaiTime',
		'td004_KanTime1',
		'td004_KanTime2',
		'td004_KanTime3',
		'td004_KanTime4',
		'td004_KanTime5',
		'td004_KanTime6',
		'td004_KanTime7',
		'td004_KanTime8',
		'td004_KanTime9',
		'td004_KanJikangaiTime',
		'td004_ChokuTime1',
		'td004_ChokuTime2',
		'td004_ChokuTime3',
		'td004_ChokuTime4',
		'td004_ChokuTime5',
		'td004_ChokuTime6',
		'td004_ChokuTime7',
		'td004_ChokuJikangaiTime',
		'td004_OenTime1',
		'td004_OenTime2',
		'td004_OenTime3',
		'td004_OenTime4',
		'td004_OenTime5',
		'td004_OenTime6',
		'td004_OenTime7',
		'td004_Chikoku',
		'td004_Gaisyutsu',
		'td004_Soutai',
		'td004_Kesseki',
		'td004_RegistDate',
		'td004_UpdateDate',
		'td004_UpdateTantoCode',
		'td004_FileStatus'
	];
}
