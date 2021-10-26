<?php

class DireccionesController extends Controller {
    function index() {

    }

    function liste() {
        $lista = new ListaModel();
        $this->view->assign('direcciones', $lista->liste());
    }

    function grabe() {
        $lista = new ListaModel();
        $direccion = new DireccionModel($_POST['nombre'],$_POST['apellido'],$_POST['telefono_casa'],$_POST['direccion'],$_POST['telefono_trabajo'],$_POST['direccion_trabajo'],$_POST['correo']);
        if($lista->grabe($direccion)) {
            $this->view->assign('mensaje','Direccion registrada');
        }
        else {
            $this->view->assign('mensaje','Direccion no pudo ser registrada');
        }
    }
}