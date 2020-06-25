<?php
class Product extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('product_model');
    }

    public function index()
    {
        $this->load->view('product_view');
    }

    public function product_data()
    {
        $data = $this->product_model->product_list();
        echo json_encode($data);
    }

    public function save()
    {
        $data = $this->product_model->save_product();
        echo json_encode($data);
    }

    public function update()
    {
        $data = $this->product_model->update_product();
        echo json_encode($data);
    }

    public function delete()
    {
        $data = $this->product_model->delete_product();
        echo json_encode($data);
    }
}
