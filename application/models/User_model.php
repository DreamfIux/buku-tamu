<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    protected $table = 'users';

    public function get_by_username(string $username)
    {
        return $this->db
                    ->where('username', $username)
                    ->get($this->table)
                    ->row();
    }
}