<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn12SeikyuWorkRireki
 * 
 * @property int $tn12_SeikyuNo
 * @property int|null $tn12_TokuisakiCode
 * @property Carbon|null $tn12_StartDate
 * @property Carbon|null $tn12_EndDate
 * @property Carbon|null $tn12_ShoriDate
 * @property float|null $tn12_SeikyuDaka
 * @property float|null $tn12_LastSeikyuDaka
 * @property float|null $tn12_NyukinDaka
 * @property float|null $tn12_KurikoshiDaka
 * @property float|null $tn12_NohinDaka
 * @property float|null $tn12_NohinDakaZnG
 * @property float|null $tn12_NohinDakaAlG
 * @property float|null $tn12_NohinDakaDenkaiG
 * @property float|null $tn12_NohinDakaSubaruG
 * @property float|null $tn12_NohinDakaEiG
 * @property float|null $tn12_NohinDakaEMightG
 * @property float|null $tn12_ZnGNebikiGaku
 * @property float|null $tn12_AlGNebikiGaku
 * @property float|null $tn12_DenkaiGNebikiGaku
 * @property float|null $tn12_SubaruGNebikiGaku
 * @property float|null $tn12_EiGNebikiGaku
 * @property float|null $tn12_EMightGNebikiGaku
 * @property float|null $tn12_ShohiZeiDaka
 * @property Carbon|null $tn12_RegistDate
 * @property Carbon|null $tn12_UpdateDate
 * @property int|null $tn12_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn12SeikyuWorkRireki extends Model
{
	protected $table = 'tn12_SeikyuWork_Rireki';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn12_SeikyuNo' => 'int',
		'tn12_TokuisakiCode' => 'int',
		'tn12_StartDate' => 'datetime',
		'tn12_EndDate' => 'datetime',
		'tn12_ShoriDate' => 'datetime',
		'tn12_SeikyuDaka' => 'float',
		'tn12_LastSeikyuDaka' => 'float',
		'tn12_NyukinDaka' => 'float',
		'tn12_KurikoshiDaka' => 'float',
		'tn12_NohinDaka' => 'float',
		'tn12_NohinDakaZnG' => 'float',
		'tn12_NohinDakaAlG' => 'float',
		'tn12_NohinDakaDenkaiG' => 'float',
		'tn12_NohinDakaSubaruG' => 'float',
		'tn12_NohinDakaEiG' => 'float',
		'tn12_NohinDakaEMightG' => 'float',
		'tn12_ZnGNebikiGaku' => 'float',
		'tn12_AlGNebikiGaku' => 'float',
		'tn12_DenkaiGNebikiGaku' => 'float',
		'tn12_SubaruGNebikiGaku' => 'float',
		'tn12_EiGNebikiGaku' => 'float',
		'tn12_EMightGNebikiGaku' => 'float',
		'tn12_ShohiZeiDaka' => 'float',
		'tn12_RegistDate' => 'datetime',
		'tn12_UpdateDate' => 'datetime',
		'tn12_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn12_SeikyuNo',
		'tn12_TokuisakiCode',
		'tn12_StartDate',
		'tn12_EndDate',
		'tn12_ShoriDate',
		'tn12_SeikyuDaka',
		'tn12_LastSeikyuDaka',
		'tn12_NyukinDaka',
		'tn12_KurikoshiDaka',
		'tn12_NohinDaka',
		'tn12_NohinDakaZnG',
		'tn12_NohinDakaAlG',
		'tn12_NohinDakaDenkaiG',
		'tn12_NohinDakaSubaruG',
		'tn12_NohinDakaEiG',
		'tn12_NohinDakaEMightG',
		'tn12_ZnGNebikiGaku',
		'tn12_AlGNebikiGaku',
		'tn12_DenkaiGNebikiGaku',
		'tn12_SubaruGNebikiGaku',
		'tn12_EiGNebikiGaku',
		'tn12_EMightGNebikiGaku',
		'tn12_ShohiZeiDaka',
		'tn12_RegistDate',
		'tn12_UpdateDate',
		'tn12_UpdateTantoCode'
	];
}
