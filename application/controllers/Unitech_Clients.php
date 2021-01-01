<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unitech_Clients extends MY_Controller {

    public function index()
	{
		$this->page = "clients/clients";
		$this->layout();
	}


	//ajax call
	public function ajax_call()
	{
		$this->load->model('Unitech_Clients_model');

		$draw = $this->input->post('draw');
		$start = $this->input->post('start');
		$length = $this->input->post('length');
		$search = $this->input->post('search');
		$search = $search['value'];

		$valid_columns = array(
			0 => 'sr_no',
			1 => 'date',
			2 => 'item',
			3 => 'unit',
			4 => 'rate',
			5 => 'gst',
			6 => 'client_name',
		);

		if(!empty($search))
		{
			$x = 0;
			foreach($valid_columns as $sterm)
			{
				if($x == 0)
				{
					$this->db->like($sterm, $search);
				}
				else{
					$this->db->or_like($sterm, $search);
				}
				$x++;
			}
		}

		//amount of rows to fetch
		$this->db->limit($length, $start);

		$result = $this->Unitech_Clients_model->getEntries();

		//echo "<pre>";
		
		

		foreach($result as $r)
		{
			$del = base_url('clients-del-entry/'.$r->sr_no.'');
			$edit = base_url('clients-edit-entry/'.$r->sr_no.'');
			$view = base_url('clients-view-entry/'.$r->sr_no.'');

			//index array
			$js[] = [
				$r->sr_no,
				$r->date,
				$r->item,
				$r->unit,
				$r->rate,
				$r->gst,
				$r->client_name,
				'<a href="'.$view.'" class="btn btn-warning" style="padding: 6px;"><span class="glyphicon glyphicon-eye-open"></span></a>
				<a href="'.$edit.'" class="btn btn-info" style="padding: 6px;"><span class="glyphicon glyphicon-pencil"></span></a>
				<a href="'.$del.'" class="btn btn-danger" style="padding: 6px;"><span class="glyphicon glyphicon-trash"></span></a>',
				
			];
		}

		$total_rec = $this->db->count_all_results('clients');

		$res = array(
			'draw' => $draw,
			'recordsTotal' => $total_rec,
			'recordsFiltered' => $total_rec,
			'data' => $js,
		);
		
		echo json_encode($res);
		
		
	}


	public function add()
	{
		$this->page = "clients/add";
		$this->layout();
	}



	// insert into db
	public function insert()
	{
		$this->load->model('Unitech_Clients_model');
		$inputVal = array(
			'date' => date('d-m-y'),
			'item' => $this->input->post('item'),
			'unit' => $this->input->post('unit'),
			'rate' => $this->input->post('rate'),
			'gst' => $this->input->post('gst'),
			'client_name' => $this->input->post('client_name'),
		);

		$data['insertCheck'] = $this->Unitech_Clients_model->insertEntries($inputVal);
		if($data['insertCheck'] == 1)
		{
			$this->session->set_flashdata('insert_msg', '<div class="alert alert-success alert-dismissible fade in"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Entry stored successfully! .</div>');
			redirect(base_url());
		}
		else if($data['insertCheck'] == 0)
		{
			redirect("clients-add-entry");
		}
	}


	//view
	public function view($id)
	{
		$this->load->model('Unitech_Clients_model');

		
		$single_record[] = $this->Unitech_Clients_model->getEntry($id);

		foreach($single_record as $sr)
		{
			$this->data = array(
				'sr_no' => $sr['sr_no'],
				'item' => $sr['item'],
				'unit' => $sr['unit'],
				'rate' => $sr['rate'],
				'gst' => $sr['gst'],
				'client_name' => $sr['client_name'],
			);
		}


		//echo "<pre>";
		//print_r($data);
		$this->page = "clients/views";
		$this->layout();
	}


	//delete
	public function delete($id)
	{
		$this->load->model('Unitech_Clients_model');
		$count = $this->Unitech_Clients_model->delEntry($id);

		if($count == 1)
		{
			$this->session->set_flashdata('insert_msg', '<div class="alert alert-success alert-dismissible fade in"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Entry deleted successfully! .</div>');
			redirect(base_url());
		}
		

	}


	//edit
	public function edit($id)
	{
		$this->load->model('Unitech_Clients_model');

		if($this->input->post() != NULL)
		{
			$params = array(
				'item' => $this->input->post('item'),
				'unit' => $this->input->post('unit'),
				'rate' => $this->input->post('rate'),	
				'gst' => $this->input->post('gst'),
				'client_name' => $this->input->post('client_name'),
			);
			$count = $this->Unitech_Clients_model->update($id, $params);

			if($count == 1)
			{
				$this->session->set_flashdata('insert_msg', '<div class="alert alert-success alert-dismissible fade in"><a href="" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Success!</strong> Entry edited successfully! .</div>');
				redirect(base_url());
			}
		}
		
		$single_record[] = $this->Unitech_Clients_model->getEntry($id);

		foreach($single_record as $sr)
		{
			$this->data = array(
				'sr_no' => $sr['sr_no'],
				'item' => $sr['item'],
				'unit' => $sr['unit'],
				'rate' => $sr['rate'],
				'gst' => $sr['gst'],
				'client_name' => $sr['client_name'],
			);
		}

		// echo "<pre>";
		// print_r($data);
		
		$this->page = "clients/edit";
		$this->layout();
	}


	
}