<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('HomeModel', 'home');
    }

    public function index()
    {
        $data['usuarios'] = $this->home->getUsuario();
        $this->twig->display('home/home', $data);
    }

    public function relatorio()
    {

        $mai = $this->input->post('mai');
        $maf = $this->input->post('maf');
        $users = $this->input->post('users_ids');
        $results = $this->home->getUsers($users);

        $data = [];
        $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        foreach ($results as $value) {
            $r_relatorio = $this->home->relatorio($value->co_usuario, $mai, $maf);
            if(count($r_relatorio) > 0){

                $ym = '';
                $my = '';
                $arr_y  = [];
                $arr_my = [];
                $arr_li = [];
                $arr_co = [];
                $arr_lu = [];
                $totli = 0;
                $totco = 0;
                $totlu = 0;
                foreach ($r_relatorio as  $val) {
                    if($ym != $val->year.'-'.$val->month){
                        $ym =  $val->year.'-'.$val->month;

                        $arr_y[] = $ym;

                        $my =  $meses[$val->month-1].' de '.$val->year;
                        $arr_my[$ym] = $my;

                        $totli = (float)$val->liquida;
                        $arr_li[$ym] = $totli;

                        $totco = (float)$val->comissao;
                        $arr_co[$ym] = $totco;

                        $totlu = (float)$val->brut_salario+(float)$totco;
                        $arr_lu[$ym] = $totlu;

                    }else{
                        $totli = (float)$totli + (float)$val->liquida;
                        $arr_li[$ym] = $totli;

                        $totco = (float)$totco + (float)$val->comissao;
                        $arr_co[$ym] = $totco;

                        $totlu = (float)$val->brut_salario+(float)$totco;
                        $arr_lu[$ym] = $totlu;
                    }
                    $salario = $val->brut_salario;
                }

                $data[] = (object)array(
                    'user'=>$value->no_usuario,
                    'year'=>$arr_y,
                    'ma'=>$arr_my,
                    'liquida'=>$arr_li,
                    'salario'=>$salario,
                    'comisao'=>$arr_co,
                    'lucro'=>$arr_lu
                    );
                 $data['usuarios'] = $data;
            }

        }

        if(count($data) == 0){
            $data['data'] = 0;
        }
        $this->twig->display('home/relatorio', $data);
    }

    public function grafico()
    {
        $meses = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Sep', 'Out', 'Nov', 'Dez');
        $mai     = $this->input->get('mai');
        $maf     = $this->input->get('maf');
        $users   = $this->input->get('users_ids');
        $results = $this->home->getUsers($users);
        $data    = [];
        foreach ($results as $value) {
            $dat = $this->home->grafico($value->co_usuario, $mai, $maf);
            $gan = [];
            foreach ($dat as $key => $val) {

                $data['meses'][] = $meses[$val->mes-1].'-'.$val->anio;
                $gan[] = number_format($val->ganancias, 2, '.', '');
            }
            $gan = array_map('floatval', $gan);
            $data['data'][] = array('type'=>'column', 'name'=>$value->no_usuario, 'data'=>$gan);
        }


        $lines = $this->home->getCostoFijo($users, $mai, $maf);

        $li = '';
        foreach ($lines as $line) {
            $li .= $line->fijo.";";
        }

        $li  = substr($li, 0, -1);
        $lin =  array_map('floatval', explode(';', $li));
        $data['line'] = $lin;

        echo json_encode($data);
    }

    public function pizza()
    {
        $mai     = $this->input->get('mai');
        $maf     = $this->input->get('maf');
        $users   = $this->input->get('users_ids');
        $dat = $this->home->pizza($users, $mai, $maf);
        $data = [];

        foreach ($dat as $val) {
            $data[] = array('name'=>$val->no_usuario, 'y'=>$val->ganancias);
        }



        // $data[] = array('name'=> 'Firefox', 'y'=>31.46);
        // $data[] = array('name'=> 'IE', 'y'=>73.06);
        echo json_encode($data, JSON_NUMERIC_CHECK);
    }
}