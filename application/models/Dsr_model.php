<?php 
class Dsr_model extends CI_Model {
     /*View*/
    function display_master_cs()
    {
      $query=$this->db->get("master_cs");
      return $query->result();
    }

    function display_cs_distribution()
    {
      $query=$this->db->get("cs_distribution");
      return $query->result();
    }  

    function getEmployeeById($sevarth_id){
      $user = $this->db->where("sevarth_id", $sevarth_id)->get("employees")->result()[0];
      return $user;
    }

    function get_comp_dsr(){
      $d = $_GET['dept'];
      $this->db->select("*");
      $this->db->from("cs_distribution");
      $this->db->where('head_initials', $d);
      $query = $this->db->get();
      return $query->result();
  }

  function add_cs($data){
    $this->db->insert('master_cs' , $data);   
    return true;
  }

  public function get_date(){
    $productID = $_GET['product_id'];
    
    $this->db->select("purchase_date");
    $this->db->from("master_cs");
    $this->db->where('Product_ID', $productID);
    $que = $this->db->get();

      foreach ($que->result('Dsr_model') as $user)
      {
              $purchaseDate = $user->purchase_date; // access attributes   
      }

      return $purchaseDate;
    }

  function dsr_cs_distribute_items($data)
  {
    $this->db->insert('cs_distribution' , $data);   
    return true;

  }

  function update_quantity($data)
  {
    $productID = $_GET['product_id'];
    //$productID = 15;
    $this->db->select("qty_distributed");
    $this->db->from("cs_distribution");
    $this->db->where('Product_ID', $productID);
    $que = $this->db->get();

      foreach ($que->result('Dsr_model') as $user)
      {
              $qtyDistributed = $user->qty_distributed; // access attributes   
      }

    $this->db->select("Quantity_Distributed");
    $this->db->from("master_cs");
    $this->db->where('Product_ID', $productID);
    $quet = $this->db->get();

      foreach ($quet->result('Dsr_model') as $use)
      {
              $OldqtyDistributed = $use->Quantity_Distributed; // access attributes   
      }

    $newQtyDistributed = $OldqtyDistributed + $qtyDistributed;
    
    //$query=$this->db->query("update master_cs SET Quantity_Distributed=$newQtyDistributed where Product_ID=$productID");
	  //$this->db->update("master_cs", ['Quantity_Distributed', $newQtyDistributed]);
    //$this->db->where('Product_ID', $productID);
    
    $data = array(
    'Quantity_Distributed' => $newQtyDistributed,
     );
    $this->db->where('Product_ID', $productID);
    $this->db->update('master_cs',$data);
    //$query = $this->db->get();
    return $newQtyDistributed;
  }


  function send_request($data)
  {
    $this->db->insert('notification_table' , $data);   
    return true;

  }

  function transfer_insert($data){
    $this->db->insert('transfer_table' , $data);   
    return true;
  }

}
  
?>