<?php

return[
    'email' => [
        'is_unique' => 'El correo electrónico ya está registrado'
    ],
    'password_confirmation' => [
        'required' => 'Por favor, repite la contraseña',
        'matches' => 'Por favor, ingresa la misma contraseña de nuevo'
    ]
];