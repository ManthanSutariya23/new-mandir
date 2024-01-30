<?php
class Authorize extends CI_Controller {

	public function __construct() {
        parent::__construct();
        date_default_timezone_set('Europe/London');
    }

	public function index()
	{
		$this->load->view('user/index');
	}

	public function vachanamrut()
	{
		$this->load->view('user/vachanamrut');
	}

	public function about()
	{
		$data['record'] = array(
			'Our Values'=>'We operate under the universal values and guidelines as taught by Lord Swaminarayan which is a blend of the spiritual essence of Hinduism and universal principles of other religions of the world.',
			'Devotion' => 'All our activities will be carried on with utmost devotion with the guideline of ‘Selfless Service unto Mankind and Devotion unto God’.',
			'Atmiyata' => 'We will live and operate in harmony with self, friends, family, society and environment.',
			'Suhradbhav' => 'Our activities will enable Universal Brotherhood where one considers themselves and everyone as children of god.',
			'Our Mission' => 'To serve the individual, family, society and environment with wide range of humanitarian and spiritual activities based on our deep-rooted faith in Lord Swaminarayan to enable the highest quality of life.',
			'Our Vision' => 'Serve the society by providing spiritual services, cultural trainings and other human services like health-care and educational activities on a secular basis to promote community development, family values enrichment, educational literacy, good-health and self-sufficiency and enable happy, peaceful and harmonious life.'
		);
		$this->load->view('user/about', $data);
	}

	public function contact()
	{
		$this->load->view('user/contact');
	}
}
