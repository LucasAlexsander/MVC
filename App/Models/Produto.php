<?php 

namespace App\Models; 
use MF\Model\Model; 

class Produto extends Model {

    public function getProdutos() {
        
        $sql = "SELECT id, descricao, preco FROM tb_produtos";
        return $this->db->query($sql)->fetchAll(\PDO::FETCH_ASSOC);
    }

}

?>