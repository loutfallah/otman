<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['id', 'name' ,'firstname' ,'lastname' ,'email' ,'montant' ,'date' ,'description' ,'debtor' ,'creditor' ,'statut' ,'user_id'];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
