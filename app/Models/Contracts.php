<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contracts extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['suppliers_id', 'energy_type_id', 'contract_name', 'var_fix', 'time_contract', 'abbreviation', 'active_contract'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contracts';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    public function suppliers()
    {
        return $this->belongsTo(Suppliers::class);
    }

}
