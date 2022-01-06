WALA LANG TOH. DALA LANG NG BAGONG TAON AT KULANG NA TULOG.

parent::__construct(); 
        

        public function index() {
            $data['navbar'] = 'main';
            $this->sitelayout->loadTemplate('pages/stickynoteswall/viewstickynotes', $data); 
        }

         $this->load->library('form_validation');    #preload form_validation library
            #$this->load->library('encrypt');
            $this->load->model('Verification_model');
