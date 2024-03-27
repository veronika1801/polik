<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Polik</title>
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- <style>
      a{
         padding-left: 100px;
         padding-right: 100px;
         margin-left: 200px;
         color: black;
         font-size: 20px;
         margin-top: 50px;
         background-color: #D9D9D9;
         border-radius: 20px;
      }
      .link{
         text-decoration: none;
         
      }
      body{
         background-color: #404040 ;
      }
   </style> -->
</head>
<body class="flex flex-col bg-zinc-800">

<header>
   <nav class="m-2">
      <div class="flex m-2 justify-around" >
       <a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/home') ?>">ГЛАВНАЯ</a>
       
       <?php
       if (!app()->auth::check()):
           ?>
           
           <a class=" flex justify-center gap-4 bg-gray-400 bg-neutral-300 m-2 p-2 rounded-full w-96 text-lg text-black" href="<?= app()->route->getUrl('/login') ?>" >ВХОД</a>

           
       <?php
       else:
           ?>
           
           <a class=" flex justify-center gap-4 bg-neutral-300  text-black m-2 p-2 rounded-full w-96 text-lg text-black"  href="<?= app()->route->getUrl('/logout') ?>">ВЫХОД (<?= app()->auth::user()->full_name ?>)</a>
           <a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg text-black" href="<?= app()->route->getUrl('/profile') ?>">ПРОФИЛЬ</a>
           </div>
       <?php
       endif;
       ?>
   </nav>
</header>
<main>
   <?= $content ?? '' ?>
</main>

</body>
</html>
