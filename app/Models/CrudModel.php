<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{
    public function getAll($table, $order = "NAMA", $where = ['status' => 1], $select = '*', $limit = 0)
    {
        $builder = $this->db->table($table);
        $builder->select($select);
        $builder->where($where);
        if ($limit != 0) {
            $builder->limit($limit);
        }
        $builder->orderBy($order);
        $result = $builder->get();
        return $result;
    }

    public function input_update($where, $data, $table)
    {
        $builder = $this->db->table($table);
        $builder->select('*');
        $builder->where($where);
        $result = $builder->get()->getRow();
        if ($result) {
            return $this->update_data($where, $data, $table);
        } else {
            return $this->input_data($data, $table);
        }
    }
}
