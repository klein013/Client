<?php

/**
 * Created by Reliese Model.
 * Date: Sat, 19 Aug 2017 06:24:35 +0000.
 */

namespace App\Models;

use Reliese\Database\Eloquent\Model as Eloquent;

/**
 * Class FailedJob
 * 
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property \Carbon\Carbon $failed_at
 *
 * @package App\Models
 */
class FailedJob extends Eloquent
{
	public $timestamps = false;

	protected $dates = [
		'failed_at'
	];

	protected $fillable = [
		'connection',
		'queue',
		'payload',
		'exception',
		'failed_at'
	];
}
