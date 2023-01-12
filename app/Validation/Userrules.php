<?php

namespace App\Validation;
use App\Models\AdminModel;

class Userrules
{
    public function validateAdminUser(String $str, String $field, array $data)
    {
        $modal = new AdminModel();
        $admin = $modal->where("email", $data['email'])->first();
        if (!$admin) return false;        
        return password_verify($data['password'], $admin['password']);
    }
}
