<?php

    class ControllerUsers {
        static public function ctrGetInto() {
            
            if (isset($_POST['ingUser'])){ 

                if(preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingUser']) && preg_match('/^[a-zA-Z0-9]+$/', $_POST['ingPassword'])){
                    $table = "users";
                    $item = "user";
                    $value = $_POST['ingUser'];
                    $answer = ModelUsers::mdlShowUsers($table,$item,$value);

                    if ($answer['user']==$_POST['ingUser'] && $answer['password'] == $_POST['ingPassword']){
                        
                        $_SESSION['LogIn']="ok";

                        echo '<script>
                            window.location = "inicio";
                        </script>';
                    } else {
                        echo "<div class='alert alert-danger'>Error al ingresar al sistema</div>";
                    }
                }
            }
        }
    }
