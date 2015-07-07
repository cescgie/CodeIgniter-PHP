<?php
class File extends Controller {

    public function File(){
        parent::Controller();

        // load library
        $this->load->library(array('table','validation'));

        // load helper
        $this->load->helper('url');

        // load model
        $this->load->model('File_model','',TRUE);
    }

    public function index()
    {
        /*
        *This will be used as page title.
        */
        $data['title'] = 'Adserverdaten';

        /*
        *Query for intialize records in database.
        */
        //$cao = $this->_db->match_userID_ipAddress('tbl_cf');
        $datax = $this->File_model->match_userID_ipAddress('ga');
        $data['result'] = $datax['result'];

        /*
        *Set recent date & time.
        */
        $data['datum'] = date("Y-m-d H:i:s");

        /*
        *Call all views that will be show as index
        */
        $data['cur_url'] = $this->getCurrURL(); // the function called and store val

        $this->load->view('header',array('data' => $data));
        $this->load->view('file',array('data' => $data));

    }
    public function selectUser($UserId){
      $data['title'] = 'User Info';
      print_r($UserId);
      $this->load->view('header',array('data' => $data));
    }
    public function selectIP($Ip){
      $data['title'] = 'Ip Info';
      print_r($Ip);
      $this->load->view('header',array('data' => $data));
    }
    function getCurrURL() {
               $currURL='http://'.$_SERVER['HTTP_HOST'].'/'.ltrim($_SERVER['REQUEST_URI'],'/').'';
           return $currURL;
    }
}
?>
