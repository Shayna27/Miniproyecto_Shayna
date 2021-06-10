<?
namespace App\Models;
use CodeIgniter\Model;

class DatosModel extends Model{
  public function listar(){
    $m= $this->db->query("SELECT * from persona");
    return $m->getResult();
  }
}  




