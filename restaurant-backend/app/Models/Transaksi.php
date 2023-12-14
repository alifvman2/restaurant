<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Transaksi
 * 
 * @property int $id
 * @property int $pembeli
 * @property int $makanan
 * @property Carbon $tgl
 * @property string $jumlah
 * @property string $total
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 *
 * @package App\Models
 */
class Transaksi extends Model
{
	protected $table = 'transaksi';

	protected $casts = [
		'pembeli' => 'int',
		'makanan' => 'int',
		'tgl' => 'datetime'
	];

	protected $fillable = [
		'pembeli',
		'makanan',
		'tgl',
		'jumlah',
		'total'
	];

	public function makanan()
	{
		return $this->belongsTo(Makanan::class, 'makanan');
	}

	public function pembeli()
	{
		return $this->belongsTo(Pembeli::class, 'pembeli');
	}
}
