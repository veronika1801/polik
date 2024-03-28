<form method="post" class="flex flex-col m-20 ">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
       <input class=" flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="text" name="full_name" placeholder="ФИО">
       <input class=" flex  gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg" type="date" name="date_of_birth" placeholder="ДД.ММ.ГГ">
       <select name=positions class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg"">
            <option value="1">врач-хирург</option>
            <option value="2" selected>врач-невролог</option>
            <option value="3">врач-педиатр</option>
            <option value="4">врач-психиатр</option>
        </select>
        <select name=specializations class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">
            <option value="1">педиатр</option>
            <option value="2" selected>хирург</option>
            <option value="3">психиатр</option>
            <option value="4">невролог</option>
        </select>
    <button class="flex justify-center gap-4 bg-neutral-300 text-black m-4 p-2 rounded-full w-96 text-lg">ДОБАВИТЬ</button>
</form>