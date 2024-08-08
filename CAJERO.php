<?php
$user = "Marlon";
$password = 315489;
$cuenta = 100000;

echo "Bienvenido al cajero automatico \n";

$tarjeta = readline("¿Que tipo de tarjeta va a ingresar?:\n");

if ($tarjeta == "debito"):
    $usuario = readline("Ingrese su nombre de usuario:\n");
    $contra = readline("Ingrese contraseña:\n");
if (($usuario == $user) && ($contra == $password)):
    echo "Bienvenido ". $usuario . "\n";

    $opcion = readline("Que desea hacer (1-ingresar o 2-Retirar):\n");
        if ($opcion == 1):
            $cuenta = readline("Cuanto desea ingresar:\n");
            echo "Tienes en tu cuenta ". $cuenta;
        elseif ($opcion == 2):
            $retiro = readline("Cuanto desea retirar:\n");
            if ($retiro > $cuenta):
                echo "No tienes saldo suficiente\n";
                elseif ($retiro == 50000 or 100000 or 150000 or 200000):
                    echo "\nHas retirado ". $retiro;
                    echo "\nTu saldo actual es de ". $cuenta - $retiro;
                endif;
            else:
            echo "Opcion incorrecta";
        endif;

else:
    echo "Usuario no valido";
endif;

else:
    echo "No se permite tarjeta de credito";
endif;



