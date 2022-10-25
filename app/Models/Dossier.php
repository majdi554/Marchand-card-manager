<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;
    protected $fillable = [
        'dossier_nature','dossier_type','dossier_name','dossier_date_of_constitution','dossier_adress',
        'dossier_country','dossier_type_of_activity','dossier_activity','dossier_branch_addresses',
        'dossier_phone_number','dossier_fax_number','dossier_mobile_number','dossier_legal_representative_name',
      ];
      protected $fillables = ['dossier_legal_representative_name','dossier_legal_representative_date_of_birth	',
      'dossier_legal_representative_place_of_birth','dossier_legal_representative_mobile','dossier_legal_representative_nationality'];
    
}
