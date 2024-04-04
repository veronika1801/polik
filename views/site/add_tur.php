<form method="post" class="flex flex-col m-20 ">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="count" placeholder="КОЛ-ВО ТУРИСТОВ">
    <input class=" flex  gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="representative" placeholder="ПРЕДСТАВИТЕЛЬ КОМПАНИИ">
    <input class=" flex  gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="route_one" placeholder="ОТКУДА">
    <input class=" flex  gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="route_two" placeholder="КУДА">
    <button class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">ДОБАВИТЬ</button>
</form>