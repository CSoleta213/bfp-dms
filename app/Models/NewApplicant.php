<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class NewApplicant extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'bin_ban_no', 'establishment_name', 'establishment_representative', 'address', 'contact_no',
    ];
}