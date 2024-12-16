<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller{
  
    public function __construct() {
        parent:: __construct();
        $this->load->helper('url');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

	public function index(){
		 $page ='home';
		 if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
		 	show_404();
		 }
		 $data['title']=ucfirst($page);
		 $this->load->view('templates/header');
		 $this->load->view('pages/'.$page,$data);
		 $this->load->view('templates/footer');
	}  

 
	public function harta(){
		 $page ='harta';
		 if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
		 	show_404();
		 }

		 $data['title']=ucfirst($page);

		 $this->load->view('templates/header');
		 $this->load->view('pages/'.$page,$data);
		 $this->load->view('templates/footer');
    }  


    public function eventetJavore(){
         $page ='eventetJavore';
         if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
         }

         $data['title']=ucfirst($page);
         $data['post']=$this->pages_model->get_event();
         $this->load->view('templates/header');
         $this->load->view('pages/'.$page,$data);
         $this->load->view('templates/footer');
    }  

     

    public function ofertaDitore(){
         $page ='ofertaDitore';
         if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
            show_404();
         }

         $data['title']=ucfirst($page);
         $data['post']=$this->pages_model->get_oferte();
         $this->load->view('templates/header');
         $this->load->view('pages/'.$page,$data);
         $this->load->view('templates/footer');
    }  



    public function infoLokal($slug=NULL){
      $data['post'] = $this->pages_model->get_posts($slug);
       if(empty($data['post'])){
    show_404();
   }
   $data['title'] = $data['post']['emri'];

    $this->load->view('templates/header');
   $this->load->view('pages/infolokal',$data);
     $this->load->view('templates/footer');
}


 
 
		public function logimi(){
		 $page ='logimi';
		 if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
		 	show_404();
		 }

		 $data['title']=ucfirst($page);
         if(!$this->session->userdata('emri')){
		 $this->load->view('templates/header');
		 $this->load->view('pages/'.$page,$data);
		 $this->load->view('templates/footer');
		}else redirect('rezervimi');

	} 

//Validimi i Logimit
	  public function procesLogimi(){
	  	  $rules = array(
            array(
                'field' => 'emri2',
                'label' => 'Name',
                'rules' => 'required'
            ),
             array(
                'field' => 'pasi2',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

	  	   $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/logimi');
            $this->load->view('templates/footer');
        } else {
        	$emri = $this->input->post('emri2');
        	$data= $this->db->get_where('perdoruesit',array('emri'=>$emri))->row_array();
          	if($data['password']== $this->input->post('pasi2')){
            $this->session->set_userdata('emri', $emri);
            redirect(base_url('rezervimi'));
        	}
        	else{
           $this->form_validation->set_rules('fjalekalimi', 'Password','required',['Input a valid username or password']); 
            $this->load->view('templates/header');
            $this->load->view('pages/logimi');
            $this->load->view('templates/footer');
        	}
        }
	  }

//Regjistrimi ne db i perdoruesve
	    public function regjistrimi() {
        $rules = array(
            array(
                'field' => 'emri',
                'label' => 'Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'emaili',
                'label' => 'Email',
                'rules' => 'required|is_unique[perdoruesit.email]'
            ),
            array(
                'field' => 'pasi',
                'label' => 'Password',
                'rules' => 'required'
            )
        );
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/logimi');
            $this->load->view('templates/footer');
        } else {
        	 $data = array(
                'emri' => $this->input->post('emri'),
                'email' => $this->input->post('emaili'),
                'password' => $this->input->post('pasi') );
                 $this->db->insert('perdoruesit',$data);
            $this->session->set_userdata('emri', $this->input->post('emri'));
            redirect(base_url('rezervimi'));
        }
    }

    public function rezervimi(){
		 $page ='rezervimi';
		 if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
		 	show_404();
		 }
		if(!$this->session->userdata('emri')){
			redirect('logimi');
		}else{
		 $data['title']=ucfirst($page);
		 $this->load->view('templates/header');
		 $this->load->view('pages/'.$page,$data);
		 $this->load->view('templates/footer');
		}
	}

    //Ruajtja rezervimit ne db 
     public function procesRezervimi() {
         
             $perdorues = $this->pages_model->get_emer($this->session->userdata('emri'));
              $lokal = $this->pages_model->get_lokal($this->input->post('barrestorant'));
             $data = array(
                'id_perdorues' => $perdorues['id'],
                'id_lokal' => $lokal['id'],
                'data' => $this->input->post('data'),
                'numri_personave' => $this->input->post('nrpersonave'));
                if($this->db->insert('rezervim',$data)){
                redirect(base_url('rezervimi'));
                }
        } 

  public function logout(){
        $this->session->unset_userdata('emri');
        redirect('logimi');
  }
   

     //Login Menaxher

	public function loginMng(){
		
		 $data['title']='Manager Login';
		 $this->load->view('templates/header');
		 $this->load->view('pages/loginMng',$data);
		 $this->load->view('templates/footer');

	}  

         public function validimMng(){
	  	  $rules = array(
            array(
                'field' => 'emri',
                'label' => 'Name',
                'rules' => 'required'
            ),
             array(
                'field' => 'fjalekalimi',
                'label' => 'Password',
                'rules' => 'required'
            )
        );

	  	   $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header');
            $this->load->view('pages/loginMng');
            $this->load->view('templates/footer');
        } else {
        	$emri = $this->input->post('emri');
        	$data= $this->db->get_where('menaxheret',array('emer_mng'=>$emri))->row_array();
          	if($data!== NULL && $data['pasword'] == $this->input->post('fjalekalimi')){
            $this->session->set_userdata('menaxheri', $emri);
            redirect(base_url('menaxher'));
        	}
        	else{
            $this->form_validation->set_rules('fjalekalimi', 'Password','required',['Input a valid username or password']); 
            $this->load->view('templates/header');
            $this->load->view('pages/loginMng');
            $this->load->view('templates/footer');
        	}
        }
	  }

      public function logoutMng(){
        $this->session->unset_userdata('menaxheri');
        redirect('loginMng');
  }
   

  //Faqa menaxherit
	public function menaxher(){
		
         if( !$this->session->userdata('menaxheri')){
          redirect('loginMng');
         }
         else{
         $data['post']= $this->pages_model->get_lokal_by_mng($this->session->userdata('menaxheri'));

         $data['title'] = $data['post']['emri'];
          $this->load->view('pages/menaxher',$data);
		 }

	}  

//Veprimet e menaxherit
  public function shtoVend($emri){
     if($emri){
       $this->pages_model->shto_vend($emri);
        redirect('menaxher');
  }
}

public function zbritVend($emri){
     if($emri){
       $this->pages_model->zbrit_vend($emri);
        redirect('menaxher');
  }
}

public function eshtePlot($emri){
     if($emri){
       $this->pages_model->eshte_plot($emri);
        redirect('menaxher');
  }
}

public function eshteBosh($emri){
     if($emri){
       $this->pages_model->eshte_bosh($emri);
        redirect('menaxher');
  }
}

public function mbyllLokalin($emri){
     if($emri){
       $this->pages_model->mbyll_lokalin($emri);
        $this->session->set_userdata('mbyllur', 'po');
        $this->session->unset_userdata('hapur');
        redirect('menaxher');
  }
}

public function hapLokalin($emri){
     if($emri){
       $this->pages_model->hap_lokalin($emri);
        $this->session->set_userdata('hapur', 'po');  
        $this->session->unset_userdata('mbyllur');
        redirect('menaxher');
  }
}

//Shfaq tabele 
 public function shfaqTabele($IdMng){
   $data['post'] = $this->pages_model->tabelaRezervimeve($IdMng);
   if(empty($data['post'])){
    show_404();
   }
   $this->load->view('pages/tabela',$data);
 }


 //Upload imaage
   public function shtoEvent(){
       
        $config['upload_path'] = './assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '600';
        $config['max_height'] = '700';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()){
            $errors = array('error' => $this->upload->display_errors());
            $post_image='noimage.jpg';
        } else{
            $data = array('upload_data' => $this->upload->data());
         $post_image = $_FILES['userfile']['name'];
        }
        $this->pages_model->shto_event($post_image);
        redirect('menaxher');
    }

        public function shtoOferte(){
        $config['upload_path'] = './assets/images/posts';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '800';
        $config['max_height'] = '800';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()){
            $errors = array('error' => $this->upload->display_errors());
            $post_image='noimage.jpg';
        } else {
            $data = array('upload_data' => $this->upload->data());
         $post_image = $_FILES['userfile2']['name'];
        }
        $this->pages_model->shto_oferte($post_image);
       redirect('menaxher');
    }
	
}