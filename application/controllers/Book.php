<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

    public function __construct() {
       parent::__construct();
        $this->load->helper('url', 'form');
        $this->load->library('form_validation');
        $this->load->database();
        $this->load->model('Book_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('index');
        $this->load->view('footer');
    }

    public function create() {
        $this->load->view('header');
        $this->load->view('create');
        $this->load->view('footer');
    }
    public function store() {
        $rules = array(
            array(
                'field' => 'name',
                'label' => 'Book Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'introduction',
                'label' => 'Book introduction',
                'rules' => 'required',
                
            ),
            array(
                'field' => 'selling_price',
                'label' => 'Selling Price',
                'rules' => 'required|greater_than[0]'
            ),
            array(
                'field' => 'cover_image',
                'label' => 'Cover Image',
                'rules' => 'required'
            )
        );

        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('header');
            $this->load->view('create');
            $this->load->view('footer');
        } else {
       

            if($this->input->post('save')){
                $data['name']=$this->input->post('name');
                $data['introduction']=$this->input->post('introduction');
                $data['sellingprice']=$this->input->post('selling_price');
                $data['coverimage']=$this->input->post('cover_image');

                $result=$this->Book_model->insert($data);
                if($result>0){
                        echo "Records Saved Successfully";
                }
                else{   
                       // redirect(site_url('create'));
                        echo "Insert error !";
                }
            } 
             redirect(site_url('book'));
        }
    }

    public function edit() {
        $this->load->view('header');
        $data['books'] = $this->Book_model->get_all();
        $this->load->view('edit',$data);
        $this->load->view('footer');
    }

    public function update($id) {
        $rules = array(
            array(
                'field' => 'name',
                'label' => 'Book Name',
                'rules' => 'required'
            ),
            array(
                'field' => 'introduction',
                'label' => 'Book introduction',
                'rules' => 'required',
                
            ),
            array(
                'field' => 'selling_price',
                'label' => 'Selling Price',
                'rules' => 'required|greater_than[0]'
            )
        );
        $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            redirect(site_url('view_details/'.$id));
        } 
        else{
            $data['name']=$this->input->post('name');
            $data['introduction']=$this->input->post('introduction');
            $data['sellingprice']=$this->input->post('selling_price');
            if(!empty($this->input->post('cover_image'))){
            $data['coverimage']=$this->input->post('cover_image');
            }
            $this->Book_model->update_book($id,$data);
            redirect(site_url('edit'));
        }

    }
    public function view_details($id){
        $this->load->view('header');
        $data['book_details'] = $this->Book_model->get_by_id($id);
        $this->load->view('viewdetails',$data);
        $this->load->view('footer');

    }
    public function search(){
        $this->load->view('header');
        $this->load->view('search');
        $this->load->view('footer');
    }
    public function searchresult(){
         $rules = array(
            array(
                'field' => 'bookid',
                'label' => 'Book ID',
                'rules' => 'required'
            )
        );
         $this->form_validation->set_rules($rules);

        if ($this->form_validation->run() == FALSE) {
            redirect(site_url('search'));
        } 
        else{
            $id=$this->input->post('bookid');
            $this->load->view('header');
            $data['book_details'] = $this->Book_model->get_by_id($id);
            $this->load->view('searchresult',$data);
            $this->load->view('footer');
        }
        

    }


    public function delete($id) {
    //    $this->Book_model->delete_book($id);
        $result=$this->Book_model->delete_book($id);
        if($result>0){
            echo "Records deleted Successfully";
        }
        else{   
                       // redirect(site_url('create'));
            echo "Delete error !";
        }

        redirect(site_url('edit'));
    }
}