<?php

namespace App\Models;

use CodeIgniter\Model;
use Michalsn\Uuid\UuidModel;

class Student extends UuidModel
{
    protected $DBGroup          = 'default';
    protected $table            = 'students';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['nis', 'name', 'user_id', 'class_id', 'major_id', 'height', 'weight', 'form', 'student_card', 'vaccine_card', 'report', 'health_paper'];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [
        'nis' => 'required',
        'name' => 'required|min_length[5]',
        'user_id' => 'required',
        'class_id' => 'required',
        'major_id' => 'required',
        'height' => 'required',
        'weight' => 'required',
        'form' => 'required',
        'student_card' => 'required',
        'vaccine_card' => 'required',
        'report' => 'required',
        'health_paper' => 'required'
    ];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
