<?php
class Faq_model extends CI_Model {

        public function __construct()
        {
                // CI_Model constructor の呼び出し
                $this->load->database();
        }
        public function count_faq(){
            $ret = $this->db->count_all_results('faq');
            return $ret;
        }
        public function get_faq($param = false){

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
                $ret = $this->db->select('*')->from('faq')->where($where_array)->get()->result_array();
                return $ret;
        }
        
        
       /*
        *@param string
        *@return false or array
        */
       public function search_keyword($keyword){

             $res = $this->db->select('*')->from('faq')->like('question', $keyword, 'both')->get()->result_array();
             //$res = $this->db->select('*')->from('faq')->like('question', $keyword, 'both')->or_like('question', $keyword2, 'both')->get()->result_array();
             
             return $res;
       }

}

