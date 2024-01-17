<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn11Seikyu
 * 
 * @property int $tn11_SeikyuNo
 * @property int|null $tn11_TokuisakiCode
 * @property Carbon|null $tn11_StartDate
 * @property Carbon|null $tn11_EndDate
 * @property Carbon|null $tn11_ShoriDate
 * @property float|null $tn11_SeikyuDaka
 * @property float|null $tn11_LastSeikyuDaka
 * @property float|null $tn11_NyukinDaka
 * @property float|null $tn11_KurikoshiDaka
 * @property float|null $tn11_NohinDaka
 * @property float|null $tn11_NohinDakaZnG
 * @property float|null $tn11_NohinDakaAlG
 * @property float|null $tn11_NohinDakaDenkaiG
 * @property float|null $tn11_NohinDakaSubaruG
 * @property float|null $tn11_NohinDakaEiG
 * @property float|null $tn11_NohinDakaEMightG
 * @property float|null $tn11_ZnGNebikiGaku
 * @property float|null $tn11_AlGNebikiGaku
 * @property float|null $tn11_DenkaiGNebikiGaku
 * @property float|null $tn11_SubaruGNebikiGaku
 * @property float|null $tn11_EiGNebikiGaku
 * @property float|null $tn11_EMightNebikiGaku
 * @property float|null $tn11_ShohiZeiDaka
 * @property Carbon|null $tn11_RegistDate
 * @property Carbon|null $tn11_UpdateDate
 * @property int|null $tn11_UpdateTantoCode
 *
 * @package App\Models
 */
class Tn11Seikyu extends Model
{
	protected $table = 'tn11_Seikyu';
	protected $primaryKey = 'tn11_SeikyuNo';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn11_SeikyuNo' => 'int',
		'tn11_TokuisakiCode' => 'int',
		'tn11_StartDate' => 'datetime',
		'tn11_EndDate' => 'datetime',
		'tn11_ShoriDate' => 'datetime',
		'tn11_SeikyuDaka' => 'float',
		'tn11_LastSeikyuDaka' => 'float',
		'tn11_NyukinDaka' => 'float',
		'tn11_KurikoshiDaka' => 'float',
		'tn11_NohinDaka' => 'float',
		'tn11_NohinDakaZnG' => 'float',
		'tn11_NohinDakaAlG' => 'float',
		'tn11_NohinDakaDenkaiG' => 'float',
		'tn11_NohinDakaSubaruG' => 'float',
		'tn11_NohinDakaEiG' => 'float',
		'tn11_NohinDakaEMightG' => 'float',
		'tn11_ZnGNebikiGaku' => 'float',
		'tn11_AlGNebikiGaku' => 'float',
		'tn11_DenkaiGNebikiGaku' => 'float',
		'tn11_SubaruGNebikiGaku' => 'float',
		'tn11_EiGNebikiGaku' => 'float',
		'tn11_EMightNebikiGaku' => 'float',
		'tn11_ShohiZeiDaka' => 'float',
		'tn11_RegistDate' => 'datetime',
		'tn11_UpdateDate' => 'datetime',
		'tn11_UpdateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn11_TokuisakiCode',
		'tn11_StartDate',
		'tn11_EndDate',
		'tn11_ShoriDate',
		'tn11_SeikyuDaka',
		'tn11_LastSeikyuDaka',
		'tn11_NyukinDaka',
		'tn11_KurikoshiDaka',
		'tn11_NohinDaka',
		'tn11_NohinDakaZnG',
		'tn11_NohinDakaAlG',
		'tn11_NohinDakaDenkaiG',
		'tn11_NohinDakaSubaruG',
		'tn11_NohinDakaEiG',
		'tn11_NohinDakaEMightG',
		'tn11_ZnGNebikiGaku',
		'tn11_AlGNebikiGaku',
		'tn11_DenkaiGNebikiGaku',
		'tn11_SubaruGNebikiGaku',
		'tn11_EiGNebikiGaku',
		'tn11_EMightNebikiGaku',
		'tn11_ShohiZeiDaka',
		'tn11_RegistDate',
		'tn11_UpdateDate',
		'tn11_UpdateTantoCode'
	];
}
