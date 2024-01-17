<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn19HirataKenshu
 * 
 * @property string $tn19_ChumonNo
 * @property int|null $tn19_YokyuBushoCode
 * @property int|null $tn19_NonyuBushoCode
 * @property string|null $tn19_SeisakuNo
 * @property string|null $tn19_B5
 * @property string|null $tn19_Zuban
 * @property int|null $tn19_Han
 * @property string|null $tn19_HinName
 * @property int|null $tn19_Suryo
 * @property float|null $tn19_Tanka
 * @property float|null $tn19_Kingaku
 * @property Carbon|null $tn19_IraiDate
 * @property Carbon|null $tn19_NohinDate
 * @property string|null $tn19_KanriNo
 * @property string|null $tn19_SheetName
 * @property Carbon|null $tn19_TorikomiDate
 * @property int|null $tn19_TorikomiTantoCode
 * @property Carbon|null $tn19_JuchuDate
 * @property int|null $tn19_InputTantoCode
 * @property Carbon|null $tn19_KaitoDate
 * @property int|null $tn19_KaitoTantoCode
 * @property int|null $tn19_JokyoKbn
 * @property int|null $tn19_OutFlg
 * @property Carbon|null $tn19_RegistDate
 * @property Carbon|null $tn19_UpdateDate
 * @property int|null $tn19_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn19HirataKenshu extends Model
{
	protected $table = 'tn19_HirataKenshu';
	protected $primaryKey = 'tn19_ChumonNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn19_YokyuBushoCode' => 'int',
		'tn19_NonyuBushoCode' => 'int',
		'tn19_Han' => 'int',
		'tn19_Suryo' => 'int',
		'tn19_Tanka' => 'float',
		'tn19_Kingaku' => 'float',
		'tn19_IraiDate' => 'datetime',
		'tn19_NohinDate' => 'datetime',
		'tn19_TorikomiDate' => 'datetime',
		'tn19_TorikomiTantoCode' => 'int',
		'tn19_JuchuDate' => 'datetime',
		'tn19_InputTantoCode' => 'int',
		'tn19_KaitoDate' => 'datetime',
		'tn19_KaitoTantoCode' => 'int',
		'tn19_JokyoKbn' => 'int',
		'tn19_OutFlg' => 'int',
		'tn19_RegistDate' => 'datetime',
		'tn19_UpdateDate' => 'datetime',
		'tn19_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn19_YokyuBushoCode',
		'tn19_NonyuBushoCode',
		'tn19_SeisakuNo',
		'tn19_B5',
		'tn19_Zuban',
		'tn19_Han',
		'tn19_HinName',
		'tn19_Suryo',
		'tn19_Tanka',
		'tn19_Kingaku',
		'tn19_IraiDate',
		'tn19_NohinDate',
		'tn19_KanriNo',
		'tn19_SheetName',
		'tn19_TorikomiDate',
		'tn19_TorikomiTantoCode',
		'tn19_JuchuDate',
		'tn19_InputTantoCode',
		'tn19_KaitoDate',
		'tn19_KaitoTantoCode',
		'tn19_JokyoKbn',
		'tn19_OutFlg',
		'tn19_RegistDate',
		'tn19_UpdateDate',
		'tn19_UpdateTantoCode'
	];
}
