
<h3><?= $message ?? ''; ?></h3>
<form method="post" class="flex flex-col m-20 " enctype="multipart/form-data">
    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="login" placeholder="ЛОГИН">
   <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="password" name="password" placeholder="ПАРОЛЬ">
   <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="full_name" placeholder="ФИО">
   <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="file" name="avatar" accept="image/*" placeholder="АВАТАР">
   <button class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">ДОБАВИТЬ</button>
</form>
