<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Demande extends Model
{
    protected $demande;
    protected $fillable = [
        'date_demande','motif_demande','avis_commission','date_commission','motif_commission',
      ];
    use HasFactory;
}
