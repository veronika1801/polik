<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label>Логин <input type="text" name="login"></label>
   <label>Пароль <input type="password" name="password"></label>
   <label>фио <input type="text" name="full_name"></label>
   <label>аватар <input type="file" name="avatar" accept="image/*"></label>
   <button>Зарегистрироваться</button>
</form>