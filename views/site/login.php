<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
   ?>
   <form method="post" class="flex flex-col m-20">
        <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
       <input class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="login" placeholder="ЛОГИН">
       <input class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="password" name="password" placeholder="ПАРОЛЬ"></label>
       <button class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">ВОЙТИ</button>
   </form>
<?php endif;
