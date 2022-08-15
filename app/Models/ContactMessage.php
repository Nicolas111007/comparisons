<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['civility_id', 'name', 'first_name', 'email', 'phone', 'mobilephone', 'messobject', 'message', 'identify', 'datetime'];

   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'contact_message';

   /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
}
