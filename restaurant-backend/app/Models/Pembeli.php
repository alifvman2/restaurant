<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pembeli
 * 
 * @property int $id
 * @property string $name
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Transaksi[] $transaksis
 *
 * @package App\Models
 */
class Pembeli extends Model
{
	protected $table = 'pembelis';

	protected $fillable = [
		'name'
	];

	public function transaksis()
	{
		return $this->hasMany(Transaksi::class, 'pembeli');
	}
}
