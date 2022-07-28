<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['civility_id', 'pc_locality_id', 'area_id', 'name', 'first_name', 'birth_date', 'e_mail', 'password', 'housephone', 'mobilephone', 'unique_id', 'active', 'subscriber'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'clients';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

}
