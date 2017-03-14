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
        $results = $this->home->relatorio();

        $users = array('anapaula.chiodaro', 'carlos.carvalho');
        // $users = array('anapaula.chiodaro');
        $user = '';
        $dat  = '';
        for ($i=0; $i <count($users) ; $i++) {

            $r_user = $this->home->getNoUser($users[$i]);
            $r_relatorio = $this->home->relatorio1($users[$i]);
            $ym     = '';
            $y      = '';
            $totli = 0;

            $user = $r_user->no_usuario.';';
            $j= '';
            $valo = [];

            foreach ($r_relatorio as $value) {

                if ($r_user->co_usuario != $user) {
                    if($ym != $value->year.'-'.$value->month){
                        $ym =  $value->year.'-'.$value->month;
                        $totli = (float)$value->liquida;
                        $valo[$ym]= $totli;
                    }else{
                        $totli = (float)$totli + (float)$value->liquida;
                        $valo[$ym]= $totli;
                    }
                }
            }
            $q = '';
            foreach ($valo as $key => $value) {
                $q .= $key.'@'.$value.':';
            }
            $q = substr($q, 0, -1);
            $dat .= $user.$q.';';
            $dat = substr($dat, 0, -1);
            $dat .= '*' ;
        }
        $dat = substr($dat, 0, -1);
        echo $dat;
        // $d = explode("*", $dat);
        // $o = explode(";", $d[0]);
        // $a = explode('#', $o[1]);
        // $e = explode('@', $a[1]);
        // print_r($e);
    }

    public function loadPage()
    {
        $users = array('anapaula.chiodaro', 'carlos.carvalho');
        $results = $this->home->getUsers($users);

        $data = [];
        $meses = array('Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro');
        foreach ($results as $value) {
            $r_relatorio = $this->home->relatorio1($value->co_usuario);
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
            // echo "<pre>";
            // print_r($r_relatorio);
            // echo "</pre>";
            $data[] = (object)array(
                'user'=>$value->no_usuario,
                'year'=>$arr_y,
                'ma'=>$arr_my,
                'liquida'=>$arr_li,
                'salario'=>$salario,
                'comisao'=>$arr_co,
                'lucro'=>$arr_lu
                );

        }
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
        $data['usuarios'] = $data;
        $this->twig->display('home/page', $data);
    }

    public function grafico()
    {
        echo 'ddd';
    }

    public function pizza()
    {
        echo 'ddd';
    }
}