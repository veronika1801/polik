<?php
return [
   //Класс аутентификации
   'auth' => \Src\Auth\Auth::class,
   //Клас пользователя
   'identity' => \Model\User::class,
   //Классы для middleware
   'routeMiddleware' => [
       'auth' => Middlewares\AuthMiddleware::class,
       'admin' => \Middlewares\AdminMiddleware::class,
       'employee' => \Middlewares\EmployeeMiddleware::class  
   ],
   'validators' => [
    'required' => \Validators\RequireValidator::class,
    'length' => \Validators\MinMaxLengthValidator::class,
    'unique' => \Validators\UniqueValidator::class
   ],
   'routeAppMiddleware' => [
    'csrf' => Middlewares\CSRFMiddleware::class,
    'trim' => Middlewares\TrimMiddleware::class,
    
    'specialChars' => Middlewares\SpecialCharsMiddleware::class
 ],


];
