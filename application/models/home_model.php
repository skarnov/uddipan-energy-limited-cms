<?php 

class Home_Model extends CI_Model {
    
    public function select_portfolio_gallery($portfolio_id)
    {
        $sql = "SELECT * FROM tbl_portfolio AS p, tbl_category AS c WHERE p.portfolio_id='$portfolio_id' AND p.portfolio_id=c.portfolio_id";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_portfolio_details($category_id)
    {
        $sql = "SELECT * FROM tbl_category WHERE category_id='$category_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
}