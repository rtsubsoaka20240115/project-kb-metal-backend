<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn24SagyoJissekiWork
 * 
 * @property int $id
 * @property int $tn24_ShijiNo
 * @property int $tn24_ShijiMeisaiNo
 * @property int|null $tn24_LineCode
 * @property string|null $tn24_LineName
 * @property int|null $tn24_RaTantoCode
 * @property string|null $tn24_RaTantoName
 * @property Carbon|null $tn24_RaDateTime
 * @property int|null $tn24_AnTantoCode
 * @property string|null $tn24_AnTantoName
 * @property Carbon|null $tn24_AnDateTime
 * @property int|null $tn24_KenTantoCode
 * @property string|null $tn24_KenTantoName
 * @property Carbon|null $tn24_KenDateTime
 * @property int|null $tn24_KonTantoCode
 * @property string|null $tn24_KonTantoName
 * @property Carbon|null $tn24_KonDateTime
 * @property int|null $tn24_ShuTantoCode
 * @property string|null $tn24_ShuTantoName
 * @property Carbon|null $tn24_ShuDateTime
 * @property int|null $tn24_KanTantoCode
 * @property string|null $tn24_KanTantoName
 * @property Carbon|null $tn24_KanDateTime
 * @property int|null $tn24_ShoTantoCode
 * @property string|null $tn24_ShoTantoName
 * @property Carbon|null $tn24_ShoDateTime
 * @property int|null $tn24_UkeTantoCode
 * @property string|null $tn24_UkeTantoName
 * @property Carbon|null $tn24_UkeDateTime
 *
 * @package App\Models
 */
class Tn24SagyoJissekiWork extends Model
{
	protected $table = 'tn24_SagyoJissekiWork';
	public $timestamps = false;

	protected $casts = [
		'tn24_ShijiNo' => 'int',
		'tn24_ShijiMeisaiNo' => 'int',
		'tn24_LineCode' => 'int',
		'tn24_RaTantoCode' => 'int',
		'tn24_RaDateTime' => 'datetime',
		'tn24_AnTantoCode' => 'int',
		'tn24_AnDateTime' => 'datetime',
		'tn24_KenTantoCode' => 'int',
		'tn24_KenDateTime' => 'datetime',
		'tn24_KonTantoCode' => 'int',
		'tn24_KonDateTime' => 'datetime',
		'tn24_ShuTantoCode' => 'int',
		'tn24_ShuDateTime' => 'datetime',
		'tn24_KanTantoCode' => 'int',
		'tn24_KanDateTime' => 'datetime',
		'tn24_ShoTantoCode' => 'int',
		'tn24_ShoDateTime' => 'datetime',
		'tn24_UkeTantoCode' => 'int',
		'tn24_UkeDateTime' => 'datetime'
	];

	protected $fillable = [
		'tn24_ShijiNo',
		'tn24_ShijiMeisaiNo',
		'tn24_LineCode',
		'tn24_LineName',
		'tn24_RaTantoCode',
		'tn24_RaTantoName',
		'tn24_RaDateTime',
		'tn24_AnTantoCode',
		'tn24_AnTantoName',
		'tn24_AnDateTime',
		'tn24_KenTantoCode',
		'tn24_KenTantoName',
		'tn24_KenDateTime',
		'tn24_KonTantoCode',
		'tn24_KonTantoName',
		'tn24_KonDateTime',
		'tn24_ShuTantoCode',
		'tn24_ShuTantoName',
		'tn24_ShuDateTime',
		'tn24_KanTantoCode',
		'tn24_KanTantoName',
		'tn24_KanDateTime',
		'tn24_ShoTantoCode',
		'tn24_ShoTantoName',
		'tn24_ShoDateTime',
		'tn24_UkeTantoCode',
		'tn24_UkeTantoName',
		'tn24_UkeDateTime'
	];
}
