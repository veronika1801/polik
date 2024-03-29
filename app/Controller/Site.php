<?php

namespace Controller;


use Src\Request;
use Model\Post;
use Src\View;
use Model\User;
use Src\Auth\Auth;
use Src\Validator\Validator;
use Model\Doctor;
use Model\Patient;
use Model\Record;




class Site
{
    private $upload_dir = __DIR__ . '/../../public/images/';
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
      if ($request->method === 'POST') {
   
          $validator = new Validator($request->all(), [
              'full_name' => ['required'],
              'login' => ['required', 'unique:users,login'],
              'password' => ['required']
          ], [
              'required' => 'Поле :field пусто',
              'unique' => 'Поле :field должно быть уникально'
          ]);
   
          if($validator->fails()){
              return new View('site.signup',
                  ['message' => json_encode($validator->errors(), JSON_UNESCAPED_UNICODE)]);
          }
   
          if (User::create($request->all())) {
              app()->route->redirect('/login');
          }
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
   app()->route->redirect('/login');
}

public function add_doctor(Request $request): string{
   
    if ($request->method === 'GET') {
        return new View('site.add_doctor');
    }

    if (Doctor::create($request->all())) {
        app()->route->redirect('/list_doctor');
        
    }

    return (new View())->render('site.list_doctor');
}
public function add_employee(Request $request): string{
   
    return (new View())->render('site.add_employee');
}
public function add_patient(Request $request): string{
   
    if ($request->method === 'GET') {
        return new View('site.add_patient');
    }

    if (Patient::create($request->all())) {
        app()->route->redirect('/list_patient');
        
    }

    return (new View())->render('site.list_patient');
}
public function add_record(Request $request): string{
    

    if ($request->method === 'GET') {
        $Doctors = Doctor::all();
        $Patients = Patient::all();
        return new View('site.add_record', ['Doctors' => $Doctors, 'Patients' => $Patients]);
    }
    

    if (Record::create($request->all())) {
        app()->route->redirect('/list_record');
        
    }

    return (new View())->render('site.list_doctor');
}
public function list_doctor(Request $request): string
{
    $Doctors = Doctor::all();
    return (new View())->render('site.list_doctor', ['Doctors' => $Doctors]);
}
public function list_patient(Request $request): string{
    $Patients = Patient::all();
    return (new View())->render('site.list_patient', ['Patients' => $Patients]);
}
public function list_record(Request $request): string{
    $Records = Record::all();
    return (new View())->render('site.list_record', ['Records' => $Records]);
}
public function home(Request $request): string{
   
    return (new View())->render('site.home');
}

public function profile(Request $request): string
    {
        $user = Auth::user(); 
        return new View('site.profile', ['user' => $user]);
    }
public function scan_doctor(Request $request): string{
   
    return (new View())->render('site.scan_doctor');
}
public function scan_patient(Request $request): string{
   
    return (new View())->render('site.scan_patient');
}
public function deleteRecord(Request $request): string
    {
        Record::where("records.id", $request->get('id'))->delete();
        app()->route->redirect('/list_record');
        return "";
    }
}