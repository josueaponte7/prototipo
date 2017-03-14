<?php
/**
*
*/
class SI_Controller extends CI_Controller
{
    protected $_tab    = '';
    public    $_unique = array();
    private   $_array  = array();
    public function __construct()
    {
        parent::__construct();
    }

    protected function _validate_form($array, $table=NULL)
    {
        $this->_array = $array;
        if($table != NULL){
            $this->_tab = $table;
        }
        $return = FALSE;
        if(isset($this->_array['token']) && $this->_array['token']== $this->session->userdata('token')){
            unset($this->_array['token']);

            $fields = $this->db->list_fields($this->_tab);
            $array_return = [];
            for ($i=0; $i <  count($fields) ; $i++) {
                $exists = FALSE;
                for ($j= 0; $j < count($this->_not_check); $j++) {
                    if($fields[$i] == $this->_not_check[$j]) $exists = TRUE;
                }
                if($exists === FALSE) array_push($array_return,$fields[$i]);
            }
            for ($i=0; $i < count($array_return); $i++) {
                $existe = $this->db->field_exists($array_return[$i], $table);
                if($existe){
                    $array_fields[] = $array_return[$i];
                }
            }
            $check_validate = array_diff(array_keys($this->_array), $array_return);
            if(count($check_validate) > 0){
                $return =  FALSE;
            }else{
                $return = TRUE;
            }
        }else{
            $return = FALSE;
        }
        return $return;
    }

    public function _msg_unique($unique)
    {
        return $unique;
    }

    public function removeCache()
    {
        $this->output->set_header('Last-Modified:'.gmdate('D, d M Y H:i:s').'GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header('Cache-Control: post-check=0, pre-check=0',false);
        $this->output->set_header('Pragma: no-cache');
    }

    // protected function add_fields($data)
    // {
    //     $arr = array_merge($this->_campos, $data);
    //     return $arr;
    // }
}