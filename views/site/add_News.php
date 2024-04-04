<form method="POST" class="flex flex-col m-10 ">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
    <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="title" placeholder="Заголовок">
    <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="file" name="image" accept="image/*" placeholder="КартинОЧКА">
    <textarea class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-lg w-96 h-96 text-lg" type="text" name="description" placeholder="Описание"></textarea>
    <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="date" name="date" placeholder="Дата создания">
    <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="subject" placeholder="Категория">
    <button class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">ДОБАВИТЬ</button>
</form>