<?php
    class M_urlfinder extends  CI_Model
    {
        
        public function lister()
        {
            $this->db->select('*');
            $this->db->from('sites');
            
            $query = $this->db->get();
            return $query->result();
        }
        
        public function inserdb($data)
        {
            $this->db->insert('sites', array('title' => $data['titre'],
                                             'desc' => $data['description'],
                                             'url' => $data['lien'],
                                             'src' => $data['img']));
        }
        public function supprimer($data){
            $this->db->delete('sites', array('id'=>$data));
            return true;
        }
      
    }