<?php
/**
 * Created by PhpStorm.
 * User: Jordy
 * Date: 2-12-14
 * Time: 10:02
 */

class rubriek extends model{


    /**
     * getHoofdRubrieken
     *
     * return alle hoofdrubrieken
     *
     * @return mixed
     */
    public function getHoofdRubrieken() {
        return $this->database->query("SELECT * FROM rubriek");
    }


    public function getRubriek($id) {
        return $this->database->query("SELECT * FROM rubriek WHERE rubrieknummer = '".$id."'");
    }


    public function getAlleRubrieken() {
       $query = "select root.rubrieknaam  as root_name
     , down1.rubrieknaam as down1_name
     , down2.rubrieknaam as down2_name
     , down3.rubrieknaam as down3_name
          from Rubriek as root
        left outer
          join Rubriek as down1
            on down1.rubriek = root.rubrieknummer
        left outer
          join Rubriek as down2
            on down2.rubriek = down1.rubrieknummer
        left outer
          join Rubriek as down3
            on down3.rubriek = down2.rubrieknummer
         where root.rubriek is null
        order
            by root_name
             , down1_name
             , down2_name
             , down3_name";
        $alleRubrieken =  $this->database->query($query);
        return $alleRubrieken;
    }


    /**
     * getSubRubrieken
     *
     * return alle subrubrieken(1 niveau eronder) van de meegegeven rubriek
     *
     * @param $bovenliggendeRubriek
     * @return mixed
     */
    public function getSubRubrieken($id) {
        return $this->database->query("SELECT * FROM rubriek WHERE rubriek='".$id."'");
    }



} 