<div class="flex flex-col items-center">
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/list_patient') ?>">СПИСОК ПАЦИЕНТОВ</a>
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/list_doctor') ?>">СПИСОК ВРАЧЕЙ</a>
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/list_record') ?>">СПИСОК ЗАПИСЕЙ</a>
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/add_patient') ?>">ДОБАВИТЬ ПАЦИЕНТА</a>
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/add_record') ?>">ЗАПИСАТЬ ПАЦИЕНТА</a>
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/add_doctor') ?>">ДОБАВИТЬ ВРАЧА</a>
<a class=" flex justify-center gap-4 bg-neutral-300 text-black m-2 p-2 rounded-full w-96 text-lg"  href="<?= app()->route->getUrl('/signup') ?>">ДОБАВИТЬ СОТРУДНИКА РЕГИСТРАТУРЫ</a>
</div>