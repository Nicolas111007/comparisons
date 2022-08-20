<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prices extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['contract_id', 'area_id', 'energy_type_id', 'suppliers_id', 'var_fix', 'subscription', 'mono', 'bi_day', 'bi_night', 'excl_night', 'g_and_c_energy', 'date_price_val', 'deleted'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prices';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
