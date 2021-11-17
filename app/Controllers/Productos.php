<?php

namespace App\Controllers;
//se trae(importa) el modelo de datos
use App\Models\ProductoModelo;

class Productos extends BaseController
{
    public function index()
    {
        return view('registroProductos');
    }

    public function registrar(){
        #Recibo todos los datos enviados desde el formulario(vista)
        
        $producto=$this->request->getPost("producto") ;
        $fotografia=$this->request->getPost("fotografia");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion");
        $tipo=$this->request->getPost("tipo");

        #validar que llego
        if($this->validate('producto')){
            #3.se organizan losdatos en un array
            #los naranjados(claves) deben coincidir con las columnas de la base de datos


            $datos=array(
                "producto"=>$producto,
                "fotografia"=>$fotografia,
                "precio"=>$precio,
                "descripcion"=>$descripcion,
                "tipo"=>$tipo
            );

            #Intentamos grabar los datos en la base de datos
            try{
                $modelo =new ProductoModelo();
                $modelo->insert($datos);
                return redirect()->to(site_url('/productos/registro'))->with('mensaje',"Exito al agregar el producto");

            }catch(\Exception $error){
                return redirect()->to(site_url('/productos/registro'))->with('mensaje', $error->getMessage());
            }

        }else{
            $mensaje = " Por favor diligencie todos los campos "; 
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', $mensaje);

        }
        
        
        
       
        
    }

    public function buscar(){
        try{
            $modelo =new ProductoModelo();
            $resultado=$modelo->findAll();
            $productos = array('productos'=>$resultado);
            return view('listaProductos',$productos);

        }catch(\Exception $error){
            
            return redirect()->to(site_url('/productos/registro'))->with('mensaje', $error->getMessage());
        }


        
    }

    public function eliminar($id){

        try{
            $modelo =new ProductoModelo();
            $modelo->where('id', $id)->delete();
            return redirect()->to(site_url('/productos/listado'))->with('mensaje',"Exito al elimiar el producto");

        }catch(\Exception $error){
            
            return redirect()->to(site_url('/productos/listado'))->with('mensaje', $error->getMessage());
        }
        
    }
    public function editar($id){
        //recibo datos
        $producto=$this->request->getPost("producto");
        $precio=$this->request->getPost("precio");
        $descripcion=$this->request->getPost("descripcion"); 
        //validacion de datos
        if($this->validate('producto2')){
            #3.se organizan los datos en un array
            #los verdes(claves) deben coincidir con las columnas de la base de datos
            $datos=array(
                "producto"=>$producto,
                "precio"=>$precio,
                "descripcion"=>$descripcion,
            );
            try{
                $modelo =new ProductoModelo();
                $modelo->update($id, $datos);
                return redirect()->to(site_url('/productos/listado'))->with('mensaje',"Exito editando el producto");
    
            }catch(\Exception $error){
                
                return redirect()->to(site_url('/productos/listado'))->with('mensaje', $error->getMessage());
            }

        }else{
            $mensaje = " Por favor diligencie todos los campos"; 
            return redirect()->to(site_url('/productos/listado'))->with('mensaje', $mensaje);

        }  
        //organizo los datos en un array asociativo
       
    }


}
