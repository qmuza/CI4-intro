<?php
namespace App\Models;

use CodeIgniter\Model;

class SheetModel extends Model{
    protected $table      = 'sheet';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $allowedFields = ['judul', 'isi', 'created_at'];
}
