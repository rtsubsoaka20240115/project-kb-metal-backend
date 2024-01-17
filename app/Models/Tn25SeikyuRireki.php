<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tn25SeikyuRireki
 * 
 * @property int $tn25_SeikyuNo
 * @property int|null $tn25_No
 * @property int|null $tn25_TokuisakiCode
 * @property Carbon|null $tn25_StartDate
 * @property Carbon|null $tn25_EndDate
 * @property Carbon|null $tn25_ShoriDate
 * @property float|null $tn25_SeikyuDaka
 * @property float|null $tn25_LastSeikyuDaka
 * @property float|null $tn25_NyukinDaka
 * @property float|null $tn25_KurikoshiDaka
 * @property float|null $tn25_NohinDaka
 * @property float|null $tn25_NohinDakaZnG
 * @property float|null $tn25_NohinDakaAlG
 * @property float|null $tn25_NohinDakaDenkaiG
 * @property float|null $tn25_NohinDakaSubaruG
 * @property float|null $tn25_NohinDakaEiG
 * @property float|null $tn25_NohinDakaEMightG
 * @property float|null $tn25_ZnGNebikiGaku
 * @property float|null $tn25_AlGNebikiGaku
 * @property float|null $tn25_DenkaiGNebikiGaku
 * @property float|null $tn25_SubaruGNebikiGaku
 * @property float|null $tn25_EiGNebikiGaku
 * @property float|null $tn25_EMightNebikiGaku
 * @property float|null $tn25_ShohiZeiDaka
 * @property string|null $tn25_Comment
 * @property Carbon|null $tn25_CreateDate
 * @property int|null $tn25_CreateTantoCode
 *
 * @package App\Models
 */
class Tn25SeikyuRireki extends Model
{
	protected $table = 'tn25_SeikyuRireki';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'tn25_SeikyuNo' => 'int',
		'tn25_No' => 'int',
		'tn25_TokuisakiCode' => 'int',
		'tn25_StartDate' => 'datetime',
		'tn25_EndDate' => 'datetime',
		'tn25_ShoriDate' => 'datetime',
		'tn25_SeikyuDaka' => 'float',
		'tn25_LastSeikyuDaka' => 'float',
		'tn25_NyukinDaka' => 'float',
		'tn25_KurikoshiDaka' => 'float',
		'tn25_NohinDaka' => 'float',
		'tn25_NohinDakaZnG' => 'float',
		'tn25_NohinDakaAlG' => 'float',
		'tn25_NohinDakaDenkaiG' => 'float',
		'tn25_NohinDakaSubaruG' => 'float',
		'tn25_NohinDakaEiG' => 'float',
		'tn25_NohinDakaEMightG' => 'float',
		'tn25_ZnGNebikiGaku' => 'float',
		'tn25_AlGNebikiGaku' => 'float',
		'tn25_DenkaiGNebikiGaku' => 'float',
		'tn25_SubaruGNebikiGaku' => 'float',
		'tn25_EiGNebikiGaku' => 'float',
		'tn25_EMightNebikiGaku' => 'float',
		'tn25_ShohiZeiDaka' => 'float',
		'tn25_CreateDate' => 'datetime',
		'tn25_CreateTantoCode' => 'int'
	];

	protected $fillable = [
		'tn25_SeikyuNo',
		'tn25_No',
		'tn25_TokuisakiCode',
		'tn25_StartDate',
		'tn25_EndDate',
		'tn25_ShoriDate',
		'tn25_SeikyuDaka',
		'tn25_LastSeikyuDaka',
		'tn25_NyukinDaka',
		'tn25_KurikoshiDaka',
		'tn25_NohinDaka',
		'tn25_NohinDakaZnG',
		'tn25_NohinDakaAlG',
		'tn25_NohinDakaDenkaiG',
		'tn25_NohinDakaSubaruG',
		'tn25_NohinDakaEiG',
		'tn25_NohinDakaEMightG',
		'tn25_ZnGNebikiGaku',
		'tn25_AlGNebikiGaku',
		'tn25_DenkaiGNebikiGaku',
		'tn25_SubaruGNebikiGaku',
		'tn25_EiGNebikiGaku',
		'tn25_EMightNebikiGaku',
		'tn25_ShohiZeiDaka',
		'tn25_Comment',
		'tn25_CreateDate',
		'tn25_CreateTantoCode'
	];
}
