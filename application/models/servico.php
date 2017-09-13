<?php

class Servico extends CI_Model {
		var $ser_id;
		var $data;
		var $desc1;
		var $desc2;
		var $local;
		var $departamento;
		var $valor;

	var $id_veiculo;
	var $veiculo;

	public function Veiculo(){
		if($this->veiculo != null){
			return $this->veiculo;
		} else {
			$this->load->model("veiculo");
			if($this->id_veiculo > 0){
				$this->veiculo = $this->db->get_where("veiculo",array("id" => $this->id_veiculo))->row(0, "veiculo");

				if(!empty($this->veiculo)){
					return $this->veiculo;
				}
			}

			$this->veiculo = new Veiculo();
			return $this->veiculo;
		}
	}

	public function Fornecedor(){
		if($this->fornecedor != null){
			return $this->fornecedor;
		} else {
			$this->load->model("fornecedor");
			if($this->id_fornecedor > 0){
				$this->fornecedor = $this->db->get_where("fornecedor",array("id" => $this->id_fornecedor))->row(0, "fornecedor");

				if(!empty($this->fornecedor)){
					return $this->fornecedor;
				}
			}

			$this->fornecedor = new Fornecedor();
			return $this->fornecedor;
		}
	}


}

?>