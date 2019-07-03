<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once(APPPATH."third_party/infusionsoft/isdk.php");
require_once(APPPATH."third_party/infusionsoft/class.phpmailer.php");
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
 
	public function bulkdata(){
	if($this->input->method() === 'post')
    {    
    $uqniceno = $this->input->post("uqniceno");
    $name = $this->input->post('name');
    $phone = $this->input->post('phone');
    $date = $this->input->post('dt');
    $time = $this->input->post('tm');
    $coachname = $this->input->post('coachname');
    $tagno =$this->input->post('tagno');
    $allocationno = $this->input->post('allocation');

 
    $sql  = "SELECT * FROM eventpeople WHERE uqniceno  = ? AND tagno = ?";
    $result =  $this->db->query($sql, array($uqniceno,$tagno));
       if ($result->num_rows() > 0) {
          // echo "success";
            $response1 = array();
            $message1 = "User Already Exists";
                        array_push($response1,array('message'=>$message1));
                        echo json_encode($response1);
       }else{
           // insert query
           
            $data = array(  
            'uqniceno' =>  $uqniceno ,  
            'name' => $name  , 
            'phone' =>  $phone , 
            'dt' => $date , 
            'tm' => $time  , 
            'coachname' => $coachname , 
            'tagno' => $tagno , 
            'allocation' => $allocationno 
            );  
           $this->db->set($data);
           $query = $this->db->insert('eventpeople', $data);
           //update allocation 
            $this->db->set('allocation',$allocationno);
            $this->db->where('tagno', $tagno);
            $this->db->update('eventpeople');
            $response = array();
            	if($query==true){
            	    	$message = "Thank you for register...";
                        array_push($response,array('message'=>$message));
                        echo json_encode($response); 
            	}	else {
                    	$message = "Failed...";
                        array_push($response,array('message'=>$message));
                        echo json_encode($response); 
            	}
        }
    }
    else
    {
        echo "<h1 style='text-align:center'>Kya backchodi hai?</h1>";
    }
}


}
