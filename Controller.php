<?php

if($_POST){
    print_r ($_POST);
    if(isset($_POST['accion']) and !empty($_POST['accion'])){ 
        if($_POST['accion'] == 'datoguardado'){   
            if(isset($_POST['email']) and !empty($_POST['email'])){
                if(isset($_POST['name']) and !empty($_POST['name'])){
                    if(isset($_POST['motivo']) and !empty($_POST['motivo'])){  
                    if(isset($_POST['consulta']) and !empty($_POST['consulta'])){
                                  
            
                            $email = $_POST['email'];
                            $name = $_POST['name'];
                            $motivo = $_POST['motivo'];
                            $consulta = $_POST['consulta'];
                           
                            
                                header('Location:http://localhost:8080/UF1844/Examen/index.php?&&email='.$email.'&&name='.$name.'&&motivo='.$motivo.'&&consulta='.$consulta);
                                //GuardarDatos($email, $name, $consulta, $datos);
                        }
                    }
                }
            }
        }
    }
}


/*function GuardarDatos($email, $name, $consulta, $datos){
    if($datos != 0){
                $msn = "Enviado, en cuanto pueda atención al cliente, se pondra en contacto con usted, gracias!";
                header('Location:http://localhost:8080/copia/UF1844/index_ex.php?msn='.$msn);
            }else{
                $msn = "Error en el envio!";
                header('Location:http://localhost:8080/copia/UF1844/index_ex.php?msn='.$msn);
            }

        }



function GuardarDatos (){
    let alert = setInterval( 'document.getElementById("alert").style.display = "none" ', 2000);
}
*/
?>