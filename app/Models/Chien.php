<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Chien
 * 
 * @property int $RowNumber
 * @property int|null $EventClass
 * @property string|null $BinaryData
 * @property string|null $NTUserName
 * @property int|null $ClientProcessID
 * @property string|null $ApplicationName
 * @property string|null $LoginName
 * @property int|null $SPID
 * @property int|null $Duration
 * @property Carbon|null $StartTime
 * @property Carbon|null $EndTime
 * @property int|null $Reads
 * @property int|null $Writes
 * @property int|null $CPU
 * @property string|null $ServerName
 * @property string|null $TextData
 * @property int|null $DatabaseID
 * @property int|null $TransactionID
 * @property string|null $NTDomainName
 * @property string|null $HostName
 * @property int|null $Error
 * @property string|null $DatabaseName
 * @property string|null $LoginSid
 * @property int|null $RowCounts
 * @property int|null $RequestID
 * @property int|null $XactSequence
 * @property int|null $EventSequence
 * @property int|null $IsSystem
 * @property string|null $SessionLoginName
 * @property int|null $GroupID
 *
 * @package App\Models
 */
class Chien extends Model
{
	protected $table = 'chien';
	protected $primaryKey = 'RowNumber';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'RowNumber' => 'int',
		'EventClass' => 'int',
		'ClientProcessID' => 'int',
		'SPID' => 'int',
		'Duration' => 'int',
		'StartTime' => 'datetime',
		'EndTime' => 'datetime',
		'Reads' => 'int',
		'Writes' => 'int',
		'CPU' => 'int',
		'DatabaseID' => 'int',
		'TransactionID' => 'int',
		'Error' => 'int',
		'RowCounts' => 'int',
		'RequestID' => 'int',
		'XactSequence' => 'int',
		'EventSequence' => 'int',
		'IsSystem' => 'int',
		'GroupID' => 'int'
	];

	protected $fillable = [
		'EventClass',
		'BinaryData',
		'NTUserName',
		'ClientProcessID',
		'ApplicationName',
		'LoginName',
		'SPID',
		'Duration',
		'StartTime',
		'EndTime',
		'Reads',
		'Writes',
		'CPU',
		'ServerName',
		'TextData',
		'DatabaseID',
		'TransactionID',
		'NTDomainName',
		'HostName',
		'Error',
		'DatabaseName',
		'LoginSid',
		'RowCounts',
		'RequestID',
		'XactSequence',
		'EventSequence',
		'IsSystem',
		'SessionLoginName',
		'GroupID'
	];
}
