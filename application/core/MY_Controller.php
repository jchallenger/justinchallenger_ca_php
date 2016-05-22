<?php
class My_Controller extends CI_Controller
{
    public $data = [];
    public $default_view = "";
    public $template = "_template";

    public function __construct() {
        parent::__construct();
        $this->load->helper('tag');

        $this->data = array(
            'view' => $this->default_view,
            'include_nav' => true,
            'include_footer' => true,
            );
    }

    public function display_page($snippet_name, $data = null, $header_code = 200){
        $this->output->set_status_header($header_code);

        if($data){ $this->data = array_merge($this->data, $data); }
        $this->data['view'] = $snippet_name;

        echo $this->load->view($this->template, $this->data, TRUE);
        die();
    }
    
    public function display_json($data, $header_code = 200){

        $this->output
            ->set_status_header($header_code)
            ->set_content_type('application/json')
            ->set_output(json_encode($data));
    }
}
