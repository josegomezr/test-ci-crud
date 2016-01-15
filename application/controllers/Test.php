<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('test_model');
	}

	public function get_index()
	{
		$this->viewData['query'] = $this->test_model->findAll();
		$this->load->view('test/index_view', $this->viewData);
	}

	public function get_view( $pk )
	{
		$this->viewData['row'] = $this->test_model->find($pk)->row();
		$this->load->view('test/read_view', $this->viewData);
	}

	public function get_edit( $pk )
	{
		$this->viewData['row'] = $this->test_model->find($pk)->row();
		$this->load->view('test/edit_view', $this->viewData);
	}

	public function post_edit( $pk )
	{
		$data = $this->input->post(NULL, TRUE);
		$result = $this->test_model->update($pk, $data);
		if($result){
			return redirect(site_url('test/index') . '?edit_success');
		}
		return redirect(site_url('test/index') . '?edit_error');
	}

	public function get_create( )
	{
		$this->load->view('test/create_view', $this->viewData);
	}

	public function post_create( )
	{
		$data = $this->input->post(NULL, TRUE);
		$result = $this->test_model->create($data);
		if($result){
			return redirect(site_url('test/index') . '?create_success');
		}
		return redirect(site_url('test/index') . '?create_error');
	}

	public function get_delete( $pk )
	{
		$result = $this->test_model->delete($pk);
		if($result){
			return redirect(site_url('test/index') . '?delete_success');
		}
		return redirect(site_url('test/index') . '?delete_error');
	}
}
