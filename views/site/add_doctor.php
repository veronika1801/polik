<form method="post">
       <label>ФИО <input type="text" name="full_name"></label>
       <label>дата рождения <input type="date" name="date_of_birth"></label>
       <select name=positions>
            <option value="1">врач-педиатр</option>
            <option value="2" selected>врач-хирург</option>
            <option value="3">врач-психиатр</option>
            <option value="4">врач-невролог</option>
        </select>
        <select name=specializations>
            <option value="1">педиатр</option>
            <option value="2" selected>хирург</option>
            <option value="3">психиатр</option>
            <option value="4">невролог</option>
        </select>
    <button>добавить</button>
</form>