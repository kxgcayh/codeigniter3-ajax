<?php
class Product_model extends CI_Model
{
    public function product_list()
    {
        $result = $this->db->get('product');
        return $result->result();
    }

    public function save_product()
    {
        $data = array(
            'product_code' => $this->input->post('product_code'),
            'product_name' => $this->input->post('product_code'),
            'product_price' => $this->input->post('product_price'),
        );

        $result = $this->db->insert('product', $data);
        return $result;
    }

    public function update_product()
    {
        $product_code = $this->input->post('product_code');
        $product_name = $this->input->post('product_name');
        $product_price = $this->input->post('product_price');

        $this->db->where('product_code', $product_code);
        $this->db->set('product_name', $product_name);
        $this->db->set('product_price', $product_price);
        $result = $this->db->update('product');
        return $result;
    }

    public function delete_product()
    {
        $product_code = $this->input->post('product_code');
        $this->db->where('product_code', $product_code);
        $result = $this->db->delete('product');
        return $result;
    }
}
