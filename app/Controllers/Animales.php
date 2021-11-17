<?php

namespace App\Controllers;
//se trae(importa) el modelo de datos
use App\Models\AnimalModelo;

class Animales extends BaseController
{
    public function index()
    {
        return view('registroAnimales');
    }

    public function registrar(){
        #Recibo todos los datos enviados desde el formulario(vista)
        
        $nombre=$this->request->getPost("nombre") ;
        $foto=$this->request->getPost("foto");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        #validar que llego
        if($this->validate('animal')){
            $datos=array(
                "nombre"=>$nombre,
                "foto"=>$foto,
                "edad"=>$edad,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            #3.se organizan losdatos en un array
            #los naranjados(claves) deben coincidir con las columnas de la base de datos
            try{
                $modelo =new AnimalModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/Animales/registro'))->with('mensaje',"Exito al agregar el animal");

            }catch(\Exception $error){
                return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
            }


        }else{
            $mensaje = " Por favor diligencie todos los campos "; 
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $mensaje);

        }
        
      
    }

    public function buscar(){

        try{
            $modelo =new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales = array('animales' => $resultado);
            return view('listaAnimales', $animales);
           

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function buscarPerro(){

        try{
            $modelo =new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales = array('animales' => $resultado);
            return view('listaPerros', $animales);
           

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function buscarGato(){

        try{
            $modelo =new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales = array('animales' => $resultado);
            return view('listaGatos', $animales);
           

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function buscarAve(){

        try{
            $modelo =new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales = array('animales' => $resultado);
            return view('listaAves', $animales);
           

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function buscarCaballo(){

        try{
            $modelo =new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales = array('animales' => $resultado);
            return view('listaCaballos', $animales);
           

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function buscarReptiles(){

        try{
            $modelo =new AnimalModelo();
            $resultado=$modelo->findAll();
            $animales = array('animales' => $resultado);
            return view('listaReptiles', $animales);
           

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/registro'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function eliminar($id){

        try{
            $modelo =new AnimalModelo();
            $modelo->where('id', $id)->delete();
            return redirect()->to(site_url('/Animales/listado'))->with('mensaje',"Exito al elimiar el animal");

        }catch(\Exception $error){
            return redirect()->to(site_url('/Animales/listado'))->with('mensaje', $error->getMessage());
        }
    }

    public function editar($id){
        //recibo datos
        $nombre=$this->request->getPost("nombre");
        $edad=$this->request->getPost("edad");
        $descripcion=$this->request->getPost("descripcion");
        //validacion de datos

        if($this->validate('animal2')){
            
            $datos=array(
                "nombre"=>$nombre,
                "edad"=>$edad,
                "descripcion"=>$descripcion
                
            );

            #3.se organizan losdatos en un array
            #los naranjados(claves) deben coincidir con las columnas de la base de datos
            try{
                $modelo =new AnimalModelo();
                $modelo->update($id,$datos);
                return redirect()->to(site_url('/Animales/listado'))->with('mensaje',"Exito al editar el animal");
    
            }catch(\Exception $error){
                return redirect()->to(site_url('/Animales/listado'))->with('mensaje', $error->getMessage());
            }


        }else{
            $mensaje = " Por favor diligencie todos los campos "; 
            return redirect()->to(site_url('/Animales/listado'))->with('mensaje', $mensaje);

        }
        
    }
}