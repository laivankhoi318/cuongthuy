<?php

/**
 * @author LinhNV
 * @version 1.00
 * @create 2015/12/13
 */

namespace App\Models\Admin;

use App\Models\TableBase;
use DB;

class OrderDetailModel extends TableBase {

    protected $table = 'orderdetail';

    public function __construct() {
        parent::__construct();
        $this->setTableName($this->table);
    }

    public function getOrderDetailByOrderId($id) {
        $options = array(
            'fields' => array('*'),
            'conditions' => array('order_id' => $id),
        );
        $result = $this->find('all', $options);

        return ($result);
    }
    
    public function deleteOrderDetail($id) {
        DB::table($this->table)->where('id', $id)->delete();
    }
    
    public function getOrderDetailByArrayId($arrId) {
        $revenue = 0;
        foreach ($arrId as $id) {
            $result = $this->getOrderDetailByOrderId($id);
            foreach ($result as $value) {
                $revenue += $value['unitPrice'] * $value['quantity'];
            }
        }
        
        return $revenue;
    }
}
