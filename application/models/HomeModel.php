<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeModel extends CI_Model {

    public $variable;

    public function __construct()
    {
        parent::__construct();

    }

    public function getUsuario()
    {
        $tipo = array('0', '1', '2');
        $this->db->select('cu.co_usuario, cu.no_usuario');
        $this->db->from('cao_usuario AS cu');
        $this->db->join('permissao_sistema AS pm', 'cu.co_usuario=pm.co_usuario', 'inner');
        $this->db->where(array('pm.co_sistema'=>1, 'pm.in_ativo'=>'s'));
        $this->db->where_in('pm.co_tipo_usuario', $tipo);
        $query = $this->db->get();
        return $query->result();
    }

    public function getUsers($users)
    {
        $this->db->select('co_usuario, no_usuario');
        $this->db->where_in('co_usuario', $users);
        $query = $this->db->get('cao_usuario');
        return $query->result();
    }

    public function relatorio($user, $mai, $maf)
    {

        $this->db->select('
            MONTH(cf.data_emissao) as month,
            YEAR(cf.data_emissao) as year,
            cs.brut_salario,
            sum(cf.valor-((cf.valor*cf.total_imp_inc)/100)) as liquida,
            ((cf.valor-(cf.valor*cf.total_imp_inc/100))*cf.comissao_cn/100) as comissao
            ');
        $this->db->from('cao_usuario AS cu');
        $this->db->join('cao_os', 'cao_os.co_usuario = cu.co_usuario', 'inner');
        $this->db->join('cao_fatura AS cf', 'cf.co_os = cao_os.co_os', 'inner');
        $this->db->join('cao_salario AS cs', 'cs.co_usuario = cu.co_usuario', 'inner');
        $this->db->where('cu.co_usuario', $user);
        $this->db->where("DATE_FORMAT(cf.data_emissao,'%Y-%m') between '$mai' and '$maf'");
        $this->db->group_by('comissao');
        $this->db->order_by('YEAR desc, month asc');
        $query = $this->db->get();

        return $query->result();
    }

    public function grafico($user, $mai, $maf)
    {
        $this->db->select('
            MONTH(cf.data_emissao) as mes,
            YEAR(cf.data_emissao) as anio,
            cs.brut_salario,
            sum(cf.valor-((cf.valor*cf.total_imp_inc)/100)) as ganancias,
            ');
        $this->db->from('cao_usuario AS cu');
        $this->db->join('cao_os', 'cao_os.co_usuario = cu.co_usuario', 'inner');
        $this->db->join('cao_fatura AS cf', 'cf.co_os = cao_os.co_os', 'inner');
        $this->db->join('cao_salario AS cs', 'cs.co_usuario = cu.co_usuario', 'inner');
        $this->db->where('cu.co_usuario', $user);
        $this->db->where("DATE_FORMAT(cf.data_emissao,'%Y-%m') between '$mai' and '$maf'");
        $this->db->group_by('anio,mes');
        $this->db->order_by('anio desc, mes asc');
        $query = $this->db->get();

        return $query->result();
    }

    public function getCostoFijo($user, $mai, $maf)
    {
        $this->db->select('
            YEAR(cf.data_emissao) as anio,
            MONTH(cf.data_emissao) as mes,
            sum(cs.brut_salario)/count(DISTINCT cu.co_usuario) as fijo
            ');
        $this->db->from('cao_usuario AS cu');
        $this->db->join('cao_os', 'cao_os.co_usuario = cu.co_usuario', 'inner');
        $this->db->join('cao_fatura AS cf', 'cf.co_os = cao_os.co_os', 'inner');
        $this->db->join('cao_salario AS cs', 'cs.co_usuario = cu.co_usuario', 'inner');
        $this->db->where_in('cu.co_usuario', $user);
        $this->db->where("DATE_FORMAT(cf.data_emissao,'%Y-%m') between '$mai' and '$maf'");
        $this->db->group_by('anio,mes');
        $this->db->order_by('anio desc, mes asc');
        $query = $this->db->get();

        return $query->result();
    }
    public function pizza($user, $mai, $maf)
    {
        $this->db->select('
            cu.no_usuario,
            sum(cf.valor-((cf.valor*cf.total_imp_inc)/100)) as ganancias
            ');
        $this->db->from('cao_usuario AS cu');
        $this->db->join('cao_os', 'cao_os.co_usuario = cu.co_usuario', 'inner');
        $this->db->join('cao_fatura AS cf', 'cf.co_os = cao_os.co_os', 'inner');
        $this->db->where_in('cu.co_usuario', $user);
        $this->db->where("DATE_FORMAT(cf.data_emissao,'%Y-%m') between '$mai' and '$maf'");
        $this->db->group_by('cu.co_usuario');
        $this->db->order_by('cu.co_usuario');
        $query = $this->db->get();

        return $query->result();
    }

}

/* End of file HomeModel.php */
/* Location: ./application/models/HomeModel.php */