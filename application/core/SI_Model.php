<?php
/**
*
*/
class SI_Model extends CI_Model
{
    private $_tab='';
    private $_last_id = 1;
    private $controller_id;
    private $_unique_arr = array();
    public function __construct()
    {
        parent::__construct();
    }

    public function lastId($table)
    {
        $id = 1;
        $this->_tab = $table;
        $this->db->select("id");
        $this->db->order_by("id", "desc");
        $query = $this->db->get($this->_tab,1);
        if($query->num_rows() > 0){
            $id = $query->row()->id+1;
        }
        return $id;
    }

    public function lastId_correlative($table,$num)
    {
        $id = 1;
        $id = str_pad((int) $id, (int) $num, '0', STR_PAD_LEFT);
        $this->_tab = $table;
        $this->db->select("id");
        $this->db->order_by("id", "desc");
        $query = $this->db->get($this->_tab,1);
        if($query->num_rows() > 0){
            $id = str_pad((int) $query->row()->id + (int) 1, (int) $num, '0', STR_PAD_LEFT);
        }
        return $id;
    }

    protected function currentId($table)
    {
        $id = 1;
        $this->_tab = $table;
        $this->db->select("id");
        $this->db->order_by("id", "desc");
        $query = $this->db->get($this->_tab,1);
        if($query->num_rows() > 0){
            $id = $query->row()->id;
        }
        return $id;
    }

    protected function _validate_unique($table)
    {
        if(count($this->_data) > count($this->_unique)){
            $this->_unique_arr = array_intersect_key($this->_data, array_flip($this->_unique));
        }else{
            return FALSE;
        }
        $result = array();
        $this->_tab = $table;
        foreach ($this->_unique_arr as $key =>  $value) {
            if ($this->db->field_exists($key, $this->_tab)){
                $this->db->where($key,$value);
                $query = $this->db->get($this->_tab);
                if($query->num_rows()> 0){
                    $result['unique_key'] = $key;
                    break;
                }
            }
        }
        return $result;
    }

    protected function add_fields()
    {

        $arr = array_merge($this->_campos, $this->_data);
        return $arr;
    }

    protected function insert($table, $data,$unique = array())
    {
        $this->_tab  = $table;
        $this->_data = $data;

        if(count($this->_unique ) > 0){
            $key_exist = $this->_validate_unique($table);
            if(count($key_exist) > 0){
                return $key_exist;
            }
        }

        $this->_data = $this->add_fields($data);

        if($this->db->field_exists('user_create', $table)){
            $this->_data['user_create'] =  $this->session->userdata('user_id');
        }
        if($this->db->field_exists('date_create', $this->_tab)){
            $this->_data['date_create'] =  date('Y-m-d H:i:s');
        }

        $_last_id     = $this->lastId($this->_tab);
        $fields       = $this->add_value($table, $this->_data);
        $fields['id'] = $_last_id;

        $insert = $this->db->insert($this->_tab, $fields);
        if($insert){
            $dat_acti['actividad']     = 'INSERTO';
            $dat_acti['sql_actividad'] =  $this->db->last_query();
            $this->actividad($dat_acti);
        }
        return $insert;

    }

    public function actividad($data)
    {
        #print_r($data);
        $data['tabla']     = $this->_tab;
        $data['id_tabla']  = $this->_last_id;
        $data['modulo_id'] = $this->controller_id;
        $this->db->insert('se_actividad',$data);
        // print_r($this->session);
    }

    protected function update($table, $data)
    {
        $this->_tab = $table;
        $id = $data['id'];
        unset($data['id']);
        $fields = $this->_fields($table, $data);
        $this->db->where('id', $id);
        $result = $this->db->update($this->_tab,$fields);
        return $result;
    }

    protected function _fields($table, $data)
    {
        $fields = array();
        foreach ($data as $key => $value) {
            $existe = $this->_exists_field($table, $key);
            if($existe){
                $fields[$key] = $value;
            }
        }
        if(count($fields) > 1){
            return $fields;
        }else{
            return 0;
        }
    }

    protected function _exists_field($table, $field)
    {
        return $this->db->field_exists($field, $table);
    }

    protected function get_type($field, $table)
    {
        $fields = $this->db->field_data($table);
        $json   = json_encode($fields);
        $array  = json_decode($json, true);

        for ($i=0; $i < count($array); $i++) {
            if (in_array($field, $array[$i])) {
                $type = $array[$i]['type'];
                break;
            }
        }
        return $type;
    }

    protected function add_value($table, $data)
    {
        $array = array();
        $fields = $this->_fields($table, $data);
        foreach ($fields as $key => $value) {
            if($this->get_type($key, $table) == 'integer'){
                if($value == ''){
                    $array[$key] = "0";
                }else{
                    $array[$key] = $value;
                }
            }else if($this->get_type($key, $table) == 'double precision'){
                if($value == ''){
                    $array[$key] = "0.00";
                }else{
                    $array[$key] = $value;
                }
            }else if($this->get_type($key, $table) == 'date'){
                if($value == ''){
                    $array[$key] = NULL;
                }else{
                    $array[$key] = $value;
                }
            }else{
                if($value == ''){
                    $array[$key] = NULL;
                }else{
                    $array[$key] = $value;
                }
            }
        }
        return $array;
    }


    public function image_upload($name,$clave,$url)
    {
        $archivo = $_FILES[$name]['name'];
        $ex      = explode('.', $archivo);
        $ex      = $ex[1]; // Extencion
        $archivo = $this->input->post($clave) . "." . $ex;
        $ruta    = getcwd();  // Obtiene el directorio actual en donde se esta trabajando
        //echo $ruta;
        move_uploaded_file($_FILES[$name]['tmp_name'], $ruta . "". $url. "" . $archivo);
        $data[$name] = $archivo;
        return $data;
    }
}