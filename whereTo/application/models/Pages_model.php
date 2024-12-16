<?php
class Pages_model extends CI_Model{

	 public function __construct(){
       $this->load->database();
	 }

//Funksioni per INFO LOKAL
	 public function get_posts($slug = FALSE){
	 	if($slug === FALSE){
	 		$query = $this->db->get('lokale');
	 		return $query->result_array();
	 	}
	 	$query = $this->db->get_where('lokale',array('emri'=> $slug));
	 	return $query->row_array();
	 }

 //Uplodimi eventeve tek perdoruesit
   public function get_event(){
   $query = $this->db->get_where('lokale',array('eventet_javore !=' => NULL));
    if($query) return $query->result_array();
   }

    //Uplodimi ofertave tek perdoruesit
   public function get_oferte(){
   $query = $this->db->get_where('lokale',array('oferta_ditore !=' => NULL));
    if($query) return $query->result_array();
   }


    //Shtimi eventeve&ofertave nga mng
    public function shto_event($post_image){
            
             $data = array( 
              'eventet_javore' =>$post_image
             );

          $lokal = $this->session->userdata('emriLokalit');
          $query = $this->db->where('emri',$lokal);
          $result=$this->db->update('lokale', $data);
           if($result) echo "U shtua me sukses";
            else echo "nuk u shtua";
      }


    public function shto_oferte($post_image){
             $data = array( 
              'oferta_ditore' =>$post_image
             );

          $lokal = $this->session->userdata('emriLokalit');
          $query = $this->db->where('emri',$lokal);
          $result=$this->db->update('lokale', $data);
            if($result) echo "U shtua me sukses";
            else echo "nuk u shtua";
      }



//Tabela perdoruesve
	  public function get_emer($slug){
	 	$query = $this->db->get_where('perdoruesit',array('emri'=>$slug));
	 	return $query->row_array();
	 }

  
   //Tabela lokaleve   
	  public function get_lokal($slug){
	 	$query = $this->db->get_where('lokale',array('emri'=> $slug));
	 	return $query->row_array();
	 }

	    
	  public function get_lokal_by_mng($slug){
	  	$query = $this->db->get_where('menaxheret',array('emer_mng'=> $slug));
	 	$result= $query->row_array();
        $query2=$this->db->get_where('lokale',array('id_menaxher'=> $result['id_menaxher']));
       return $query2->row_array();
	 }

	 // OPERACIONET MENAXHER :Shto vend
	 public function shto_vend($emri){
         $query = $this->db->get_where('lokale',array('emri'=> $emri));
          $query =  $query->row_array();
         	echo $query['vende_te_lira'];
         if($query['vende_te_lira'] > 0){ 
         	 $data = [
            'vende_te_lira' => $query['vende_te_lira'] - 1 ];
            $uShtua = $this->db->update('lokale', $data);
        } 
      }


	 //Ul vend
	 public function zbrit_vend($emri){
         $query = $this->db->get_where('lokale',array('emri'=> $emri));
          $query =  $query->row_array();
         if($query['vende_te_lira'] < $query['kapaciteti']){ 
         	 $data = [
            'vende_te_lira' => $query['vende_te_lira'] + 1 ];
             $uZbrit = $this->db->update('lokale', $data);
             } 
      }


	 //Be plot 
	 public function eshte_plot($emri){
         $query = $this->db->get_where('lokale',array('emri'=> $emri));
          $query =  $query->row_array();
         	 $data = [
            'vende_te_lira' =>0];
            $eshtePlot = $this->db->update('lokale', $data);
             } 


	 //Be bosh
	 public function eshte_bosh($emri){
         $query = $this->db->get_where('lokale',array('emri'=> $emri));
          $query =  $query->row_array();
         	 $data = [
            'vende_te_lira' => $query['kapaciteti']];
            $eshteBosh = $this->db->update('lokale', $data);
      }

       // Mbyll Lokalin
	 public function mbyll_lokalin($emri){
         $query = $this->db->get_where('lokale',array('emri'=> $emri));
          $query =  $query->row_array();
         	 $data = [
            'hapur' => 0,
             'vende_te_lira' => $query['kapaciteti']];
            $mbyll = $this->db->update('lokale', $data);
      }

       // Hap Lokalin
	 public function hap_lokalin($emri){
         $query = $this->db->get_where('lokale',array('emri'=> $emri));
          $query =  $query->row_array();
         	 $data = [
            'hapur' =>1];
            $mbyll = $this->db->update('lokale', $data);
      }

//Shfaq tabelen
      public function tabelaRezervimeve($IdMng){

        $this->db->select('rezervim.numri_personave, perdoruesit.emri, perdoruesit.email, rezervim.data');  
        $this->db->from('rezervim');
        $this->db->join('perdoruesit', 'perdoruesit.id=rezervim.id_perdorues', 'INNER');  
        $this->db->join('lokale', 'lokale.id =rezervim.id_lokal', 'INNER');  
        $this->db->join('menaxheret', 'menaxheret.id_menaxher = lokale.id_menaxher', 'INNER');  
        $this->db->where(array('lokale.id_menaxher'=> $IdMng));
        return $this->db->get();  
      }
    }


?>