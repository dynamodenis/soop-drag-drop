<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Socialmedia extends CI_Controller {

	/**
	 * Loading the food safety data modules
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->model('Login_Model');
		$this->load->model('Landing_Model');

		$this->load->model('SocialMedia_Model');
		
		$this->selected = $this->Login_Model->get_active_rvc();
	}

	public function index()
	{
		$role = $this->Login_Model->get_role();


        $sub_module = json_decode($this->Landing_Model->get_allowed_sub_modules($role), true);

        $num = count($sub_module);

        $x = 0;

        $data_sub = array();

        for($x = 1; $x <= $num; $x++){

          array_push($data_sub, $sub_module[$x-1]['SUB_MODULE_NAME']);

        }

        $result['sub_modules'] = $data_sub;
        $data["social"] = $this->SocialMedia_Model->get_setups();
		$this->load->view('layout/system-header');
		$this->load->view('layout/marketingSocialmedia_aside', $result);
		$this->load->view('marketingSocialmedia/socialmedia/marketingSocialmedia', $data);
		$this->load->view('layout/system-footer');
    }
    

	public function saveTripAdvisor()
	{
		$SOCIAL_ID = RAND(1000, 9000);
        $YOUR_USERNAME = $this->input->post('username_trip');
        $COMP1 = $this->input->post('compe1_trip');
        $COMP2 = $this->input->post('compe2_trip');
        $COMP3 = $this->input->post('compe3_trip');
        $COMP4 = $this->input->post('compe4_trip');
        $COMP5 = $this->input->post('compe5_trip');
        $SOCIAL_ID_TYPE = 'TRIP ADVISOR';
		

		$data = array(
			'SOCIAL_ID' => $SOCIAL_ID,
            'YOUR_USERNAME' => $YOUR_USERNAME,
            'COMP_1' => $COMP1,
            'COMP_2' => $COMP2,
            'COMP_3' => $COMP3,
            'COMP_4' => $COMP4,
            'COMP_5' => $COMP5,
            'SOCIAL_MEDIA_TYPE' => $SOCIAL_ID_TYPE,
            'RVC_ID' => $this->selected
		);

		if ($this->SocialMedia_Model->insertSocialMediaSetup($data)) {
			echo "1";
		} else {
			echo "2";
		}
		
	}

	public function saveFacebook()
	{
		$SOCIAL_ID = RAND(1000, 9000);
        $YOUR_USERNAME = $this->input->post('username_face');
        $COMP1 = $this->input->post('compe1_face');
        $COMP2 = $this->input->post('compe2_face');
        $COMP3 = $this->input->post('compe3_face');
        $COMP4 = $this->input->post('compe4_face');
        $COMP5 = $this->input->post('compe5_face');
        $SOCIAL_ID_TYPE = 'FACEBOOK';


		$data = array(
			'SOCIAL_ID' => $SOCIAL_ID,
            'YOUR_USERNAME' => $YOUR_USERNAME,
            'COMP_1' => $COMP1,
            'COMP_2' => $COMP2,
            'COMP_3' => $COMP3,
            'COMP_4' => $COMP4,
            'COMP_5' => $COMP5,
            'SOCIAL_MEDIA_TYPE' => $SOCIAL_ID_TYPE,
            'RVC_ID' => $this->selected
		);

		if ($this->SocialMedia_Model->insertSocialMediaSetup($data)) {
			echo "1";
		} else {
			echo "2";
		}
		
	}

	public function savePinterest()
	{
		$SOCIAL_ID = RAND(1000, 9000);
        $YOUR_USERNAME = $this->input->post('username_pin');
        $COMP1 = $this->input->post('compe1_pin');
        $COMP2 = $this->input->post('compe2_pin');
        $COMP3 = $this->input->post('compe3_pin');
        $COMP4 = $this->input->post('compe4_pin');
        $COMP5 = $this->input->post('compe5_pin');
        $SOCIAL_ID_TYPE = 'PINTEREST';


		$data = array(
			'SOCIAL_ID' => $SOCIAL_ID,
            'YOUR_USERNAME' => $YOUR_USERNAME,
            'COMP_1' => $COMP1,
            'COMP_2' => $COMP2,
            'COMP_3' => $COMP3,
            'COMP_4' => $COMP4,
            'COMP_5' => $COMP5,
            'SOCIAL_MEDIA_TYPE' => $SOCIAL_ID_TYPE,
            'RVC_ID' => $this->selected
		);

		if ($this->SocialMedia_Model->insertSocialMediaSetup($data)) {
			echo "1";
		} else {
			echo "2";
		}
		
	}

	public function saveInstagram()
	{
		$SOCIAL_ID = RAND(1000, 9000);
        $YOUR_USERNAME = $this->input->post('username_insta');
        $COMP1 = $this->input->post('compe1_insta');
        $COMP2 = $this->input->post('compe2_insta');
        $COMP3 = $this->input->post('compe3_insta');
        $COMP4 = $this->input->post('compe4_insta');
        $COMP5 = $this->input->post('compe5_insta');
        $SOCIAL_ID_TYPE = 'INSTAGRAM';


		$data = array(
			'SOCIAL_ID' => $SOCIAL_ID,
            'YOUR_USERNAME' => $YOUR_USERNAME,
            'COMP_1' => $COMP1,
            'COMP_2' => $COMP2,
            'COMP_3' => $COMP3,
            'COMP_4' => $COMP4,
            'COMP_5' => $COMP5,
            'SOCIAL_MEDIA_TYPE' => $SOCIAL_ID_TYPE,
            'RVC_ID' => $this->selected
		);

		if ($this->SocialMedia_Model->insertSocialMediaSetup($data)) {
			echo "1";
		} else {
			echo "2";
		}
		
    }
    

	public function saveTwitter()
	{
		$SOCIAL_ID = RAND(1000, 9000);
        $YOUR_USERNAME = $this->input->post('username_twit');
        $COMP1 = $this->input->post('compe1_twit');
        $COMP2 = $this->input->post('compe2_twit');
        $COMP3 = $this->input->post('compe3_twit');
        $COMP4 = $this->input->post('compe4_twit');
        $COMP5 = $this->input->post('compe5_twit');
        $SOCIAL_ID_TYPE = 'TWITTER';


		$data = array(
			'SOCIAL_ID' => $SOCIAL_ID,
            'YOUR_USERNAME' => $YOUR_USERNAME,
            'COMP_1' => $COMP1,
            'COMP_2' => $COMP2,
            'COMP_3' => $COMP3,
            'COMP_4' => $COMP4,
            'COMP_5' => $COMP5,
            'SOCIAL_MEDIA_TYPE' => $SOCIAL_ID_TYPE,
            'RVC_ID' => $this->selected
		);

		if ($this->SocialMedia_Model->insertSocialMediaSetup($data)) {
			echo "1";
		} else {
			echo "2";
		}
		
    }
    
    // Update Twitter details
    public function updateTwitter()
	{
        $YOUR_USERNAME = $this->input->post('username_twit');
        $COMP1 = $this->input->post('compe1_twit');
        $COMP2 = $this->input->post('compe2_twit');
        $COMP3 = $this->input->post('compe3_twit');
        $COMP4 = $this->input->post('compe4_twit');
        $COMP5 = $this->input->post('compe5_twit');
        $SOCIAL_ID_TYPE = 'TWITTER';
        $SOCIAL_ID = $this->input->post('social_id');

		$data = array(
            'YOUR_USERNAME' => $YOUR_USERNAME,
            'COMP_1' => $COMP1,
            'COMP_2' => $COMP2,
            'COMP_3' => $COMP3,
            'COMP_4' => $COMP4,
            'COMP_5' => $COMP5,
            'SOCIAL_MEDIA_TYPE' => $SOCIAL_ID_TYPE,
            'RVC_ID' => $this->selected
        );
        print_r($data);
        
        if ($this->SocialMedia_Model->update_social_media($SOCIAL_ID, $data)) {
            echo "1";
        } else {
            echo "2";
        }
		
    }
    

}