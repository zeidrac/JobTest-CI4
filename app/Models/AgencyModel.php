<?php namespace App\Models;

use CodeIgniter\Model;

class AgencyModel extends Model
{
    protected $table = 'agencies';
    protected $allowedFields = ['name', 'email'];
}