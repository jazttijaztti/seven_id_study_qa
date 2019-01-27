<?php
class Admin_model extends CI_Model {

        public function __construct()
        {
                // CI_Model constructor の呼び出し
                $this->load->database();
        }
        public function count_admin(){
            $ret = $this->db->count_all_results('admin');
            return $ret;
        }
        public function get_admin($param = false){

                if (!empty($param['limit'])) {
                   $limit = $param['limit'];
                   $this->db->limit($limit);
                }
                if (!empty($param['offset'])) {
                   $offset = $param['offset'];
                   $this->db->offset($offset);
                }
                if (!empty($param['order_by'])) {
                   $order_by = $param['order_by'];
                   $this->db->order_by('id',$order_by);
                }

                $where_array = array('delete_flg'=>0);
                if (!empty($param["id"])) {
                   $id = $param["id"];
                   $this->db->where("id",$id);
                }
                $ret = $this->db->select('*')->from('admin')->where($where_array)->get()->result_array();
                return $ret;
        }
        
        
       /*
        *@param string
        *@return false or array
        */
       public function search_admin($param){
             $this->db->select('*')->from('admin');
             $res = $this->db->where($param)->get()->result_array();
             
             return $res;
       }

}

