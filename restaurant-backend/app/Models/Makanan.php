<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Makanan
 * 
 * @property int $id
 * @property string $name
 * @property string $harga
 * @property string|null $foto
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Transaksi[] $transaksis
 *
 * @package App\Models
 */
class Makanan extends Model
{
	protected $table = 'makanan';

	protected $fillable = [
		'name',
		'harga',
		'foto'
	];

	public function transaksis()
	{
		return $this->hasMany(Transaksi::class, 'makanan');
	}
}
