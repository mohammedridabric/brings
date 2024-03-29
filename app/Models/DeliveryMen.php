<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class DeliveryMen extends Authenticatable
{
    //
  use  Notifiable;

  protected $guard = 'customer';

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */

  protected $fillable = [  'fname', 'lname', 'address', 'city','phone', 'email','password','latitude','longitide','price_delivery','price_refund','price_cancel','bank','rib','avatar','statut', 'updated_at', 'created_at'];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */

  protected $hidden = [
    'password', 'remember_token',
  ];

  /**
   * The attributes that should be cast to native types.
   *
   * @var array
   */

  protected $casts = [
    'email_verified_at' => 'datetime',
  ];

  public function scopeSelection($query){
   return $query->select('id','fname', 'lname','avatar','statut','city','email');
  }

}
