<?php

namespace App\Models;

use CodeIgniter\Model;

class BeasiswaModel extends Model
{
    protected $table = 'beasiswa';
    protected $useTimestamps = true;
    protected $allowedFields = ['jenis_beasiswa','slug','beasiswa_untuk','informasi'];

    public function getBeasiswa($slug=false){
        if($slug==false){
            return $this->findAll();
        }
        return $this->where(['slug'=>$slug])->first();
    }
}