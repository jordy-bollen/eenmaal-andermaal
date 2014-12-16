<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 16-12-14
 * Time: 11:06
 */

class childcats extends controller{
    function __constructor() {
        parent::__construct();

    }

    public function index() {

        if($_REQUEST)
        {
            $fieldId = $_REQUEST['field_id'];
         $id 	= $_REQUEST['parent_id'];
        $modelRubrieken = $this->loadModel('rubriek');
        $rubrieken = $modelRubrieken->getSubRubrieken($id);
            $this->data['rubrieken'] = $rubrieken;
            if($fieldId == 1) {
            $this->loadView('rubrieken/sub1', $this->data);
            }
            if($fieldId == 2) {
                $this->loadView('rubrieken/sub2', $this->data);
            }
            if($fieldId == 3) {
                $this->loadView('rubrieken/sub3', $this->data);
            }
        }
    }
} 