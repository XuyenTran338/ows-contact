<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('contact_model');
    }

    public function index()
    {
        $data['contacts'] = $this->contact_model->getContacts();
        $data['subview']  = 'contact_list';
        $data['title']    = 'Danh bạ';
        $this->load->view('main', $data);
    }

    public function add()
    {
        $data['subview']  = 'contact_add';
        $data['title']    = 'Thêm danh bạ';
        $this->load->view('main', $data);
    }

    public function edit($id)
    {
        $data['contact_item'] = $this->contact_model->getContactById($id);
        $data['subview']      = 'contact_edit';
        $data['title']        = 'Xem và cập nhật danh bạ';
        $this->load->view('main', $data);
    }

    public function save($id=0)
    { 
        $postData = array(
            'name'      => $this->input->post('name'),
            'phone1'    => $this->input->post('phone1'),
            'phone2'    => $this->input->post('phone2'),
            'email'     => $this->input->post('email'),
            'fb'        => $this->input->post('fb'),
            'company'   => $this->input->post('company'),
            
        );

        if($id == 0) // thêm mới
            $this->contact_model->addContact($postData);
        else // cập nhật
            $this->contact_model->updateContact($postData, $id);

        redirect(base_url('/'));
    }

    public function delete($id)
    {
        $this->contact_model->deleteContact($id);
        echo "success";
    }
}