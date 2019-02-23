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
}

