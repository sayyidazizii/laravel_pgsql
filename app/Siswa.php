<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'siswas';
    protected $primaryKey = 'id';
    protected $fillable = ['nis','nama','kelas'];

}
