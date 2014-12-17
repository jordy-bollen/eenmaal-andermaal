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
            $rows = sqlsrv_has_rows($rubrieken);
            if($fieldId == 1) {
                if($rows) {
                $this->loadView('rubrieken/sub1', $this->data);
                }
                else {
                    echo '<input type="submit" name="submitRubriek" value="Advertentie plaatsen" />';
                }
            }
            else if($fieldId == 2) {
                if($rows) {
                $this->loadView('rubrieken/sub2', $this->data);
                }
                else {
                    echo '<input type="submit" name="submitRubriek" value="Advertentie plaatsen" />';
                }
            }
            else if($fieldId == 3) {
                if($rows) {
                $this->loadView('rubrieken/sub3', $this->data);
                }
                else {
                    echo '<input type="submit" name="submitRubriek" value="Advertentie plaatsen" />';
                }
            }
            else if($fieldId == 4) {
                if($rows) {
                $this->loadView('rubrieken/sub4', $this->data);
                }
                else {
                    echo '<input type="submit" name="submitRubriek" value="Advertentie plaatsen" />';
                }
            }
            else {
                echo '<input type="submit" name="submitRubriek" value="Advertentie plaatsen" />';
            }
        }

    }
} 