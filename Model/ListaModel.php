<?php

class ListaModel {
    function liste() {
        /*
        $this->lista = array();
        $archivo = fopen('lista.txt','r');
        while($registro = fgets($archivo)) {
            $direccion = explode(':',$registro);
            $this->lista[] = new DireccionModel($direccion[0],$direccion[1],$direccion[2],$direccion[3],$direccion[4],$direccion[5],$direccion[6]);
        }
        fclose($archivo);
        return $this->lista;
        */
        $this->lista = $GLOBALS['db']->GetActiveRecords('eb92786_contacts');
        return $this->lista;
    }

    function grabe(DireccionModel $direccion) {
        $archivo = fopen('lista.txt','a+');
        if(fwrite($archivo,$direccion->serialice()."\n")) {
            fclose($archivo);
            return true;
        }
        else {
            fclose($archivo);
            return false;
        }
    }
}