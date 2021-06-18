<?php
namespace App\Models;
use CodeIgniter\Model;
class DatosModel extends Model{
  public function obtenerInformacion($data){
      $gModel = $this->db->table('persona');
      $gModel->where($data);
      return $gModel->get()->getResultArray();
    
  }
  public function listarTodo(){
      $gModel = $this->db->query("SELECT * FROM persona");
      return $gModel->getResult();
    
    
  }
  
  public function insertar($data){
      $gModel = $this->db->table('persona');
      $gModel->insert($data);
      return $this->db->insertID();
    
    
  }
  
  public function actualizar($data,$id){
      $gModel = $this->db->table('persona');
      $gModel->set($data);
      $gModel->where($id);
      return $gModel->update();

  }
  
  public function eliminar($id){
      $gModel = $this->db->table('persona');
      $gModel->where($id);
      return $gModel->delete();
    
  }
  
}
