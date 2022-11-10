<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    public $fillable =['id','nama','whatsapp','bagian','jenis_kebutuhan','kebutuhan','deskripsi','foto','urgensi','kategori','progres','pic'];
    public $timestamps = true;

    use HasFactory;
}
