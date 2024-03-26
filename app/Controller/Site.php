<?php

namespace Controller;
use Src\Request;
use Model\Post;
use Src\View;
use Model\User;
use Src\Auth\Auth;


class Site
{
    public function index(Request $request): string
    {
       $posts = Post::where('id', $request->id)->get();
       return (new View())->render('site.post', ['posts' => $posts]);
    }
    

   public function hello(): string
   {
       return new View('site.hello', ['message' => 'hello working']);
   }
   public function signup(Request $request): string
{
   if ($request->method === 'POST' && User::create($request->all())) {
       app()->route->redirect('/home');
   }
   return new View('site.signup');
}
public function login(Request $request): string
{
   //Если просто обращение к странице, то отобразить форму
   if ($request->method === 'GET') {
       return new View('site.login');
   }
   //Если удалось аутентифицировать пользователя, то редирект
   if (Auth::attempt($request->all())) {
       app()->route->redirect('/home');
   }
   //Если аутентификация не удалась, то сообщение об ошибке
   return new View('site.login', ['message' => 'Неправильные логин или пароль']);
}

public function logout(): void
{
   Auth::logout();
   app()->route->redirect('/hello');
}

public function add_doctor(Request $request): string{
   
    return (new View())->render('site.add_doctor');
}
public function add_employee(Request $request): string{
   
    return (new View())->render('site.add_employee');
}
public function add_patient(Request $request): string{
   
    return (new View())->render('site.add_patient');
}
public function add_record(Request $request): string{
   
    return (new View())->render('site.add_record');
}
public function list_doctor(Request $request): string{
   
    return (new View())->render('site.list_doctor');
}
public function list_patient(Request $request): string{
   
    return (new View())->render('site.list_patient');
}
public function list_record(Request $request): string{
   
    return (new View())->render('site.list_record');
}
public function home(Request $request): string{
   
    return (new View())->render('site.home');
}

public function profile(Request $request): string{
   
    return (new View())->render('site.profile');
}
public function scan_doctor(Request $request): string{
   
    return (new View())->render('site.scan_doctor');
}
public function scan_patient(Request $request): string{
   
    return (new View())->render('site.scan_patient');
}
}