<?php
class event_model extends CI_Model {

        public function __construct()
        {
                // CI_Model constructor の呼び出し
                $this->load->database();
        }
         
        public function insert ($param) {

           
           $data['title']       = $param['title'];
           $data['eventdate']   = $param['eventdate'];
           $data['link']        = $param['link'];
           $data['description'] = $param['description'];
           $data['hotel_id']    = $param['hotel_id'];

           $this->db->insert('event',$data);
           $ret = $this->db->insert_id();
           return $ret;

        }


        public function update_image ($param) {
            $data['image_name'] = $param['event_image'];
            $this->db->set($data);
            $this->db->where('id' , $param['event_id']);
            $ret = $this->db->update('event');
            return $ret;
        }

        public function get_event($param){
            $limit = 10;
            $offset = 0;
            $order_by = 'DESC';

            if(!empty($param['limit'])){
                $limit = $param['limit'];
                $this->db->limit($limit);
            }

            if(!empty($param['offset'])){
                $offset = $param['offset'];
                $this->db->offset($offset);
            }

            if(!empty($param['order_by'])){
                $order_by = $param['order_by'];
                $this->db->order_by('id', $order_by);
            }


            $where_array['delete_flg'] = 0;
            $where_array['finished_flg'] = 0;
            $this->db->select('*')->from('event');
            $this->db->where($where_array);
            $res = $this->db->get()->result_array();
            
            return $res;
        }

        public function get_finished_event(){
            $where_finished['finished_flg'] = 1;
            $this->db->select('*')->from('event');
            $this->db->where($where_finished);
            $this->db->order_by('id', 'DESC');
            $res = $this->db->get()->result_array();
            return $res;

        }

        public function total_rows($where){
            $this->db->where($where);
            $this->db->select('COUNT(*) as count');
            $this->db->from('event');
            $query = $this->db->get();
            $count = $query->row_array()['count'];
            return $count;
        }

        public function get_image_name(){
          
        }

        public function get_event_top($param){
	  $where_array['delete_flg'] = 0;
	  $where_array['finished_flg'] = 0;
 	  $this->db->select('*')->from('event');
  	  $this->db->limit($param['limit']);
	  $this->db->offset(0);
	  $this->db->where($where_array);
	  $this->db->order_by('id', $param['order_by']);
	  $res = $this->db->get()->result_array(); 
 	  return $res;
        }

        public function get_finished_event_top(){
          $where_array['finished_flg'] = 1;
	  $where_array['delete_flg'] = 0;
	  $this->db->select('*')->from('event');
	  $this->db->where($where_array);
	  $this->db->order_by('id', 'DESC');
 	  $this->db->limit(6);
          $res = $this->db->get()->result_array();

          return $res;
        }
}

