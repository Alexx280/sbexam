<script src="jquery.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
// Меняем указатель курсора
        $(".table-form").css("cursor", "pointer");}
    </script>


<div id='inner'>
    <p> Проверка знаний инструкций по информационной безопасности сотрудников ГК Лама </p>
    <p> </p>
</div>


<div id='centr-w'>
<div id='centr'>
    <form method="post" action="inter.php">
        Фамилия:<br>
        <input type="text" id="fa" name="family" size="30" required="required"  ><br>
        Имя:<br>
        <input type="text" id="na" name="name" size="30" required="required" ><br>
        Отчество:<br>
        <input type="text" id="fn" name="father_name" size="30" required="required" ><br>
        Паспорт<br>
        Серия:  <input type="text" id="ps" name="pasp_s" size="4" required="required">
        Номер:  <input type="text" id="pn" name="pasp_n" size="6" required="required"<br><br>
        Организация (Юр.лицо):</br>

        <select name="factory"  >
            <option value="">Выберите из списка</option>
            <option value="СпарТомск ООО">"СпарТомск" ООО</option>
            <option value="Проф-Эксперт">"Проф-Эксперт"</option>
            <option value="Троян ООО">"Троян" ООО</option>
            <option value="Альфа Недвижимость ООО">"Альфа Недвижимость" ООО</option>
            <option value="Глобал-Маркет ООО">"Глобал-Маркет" ООО</option>
            <option value="Инвест Ресторация ООО">"Инвест Ресторация" ООО</option>
            <option value="ИнтерЛизинг ООО">"ИнтерЛизинг" ООО</option>
            <option value="ПК Лама ООО">"ПК ЛАМА" ООО</option>
            <option value="Персонал-Групп Т ООО">"Персонал-Групп Т" ООО</option>
            <option value="Терминал Групп ООО">"Терминал Групп" ООО</option>
            <option value="УК Лама ООО">"УК Лама" ООО</option>
            <option value="ТомРитэйл ООО">"ТомРитэйл" ООО</option>
            <option value="Централизованная Бухгалтерия ООО">"Централизованная  Бухгалтерия" </option>
            <option value="УК Изумрудный город ООО">"УК "Изумрудный город" ООО</option>
        </select><br>

        Должность:<br>
        <input type="text" name="job" id="jo" size="30" required="required" ></br>
        Руководитель:</br>
        <input type="text" name="boss" id="bo" size="30" required="required" placeholder="Фамилия И.О."></br>
        Код:</br>
        <input type="text" name="code" id="co" size="30" required="required" placeholder="0000" title="Код получите у специалиста по безопасности"></br>
        </br>
        <input type="submit" value="Начать тест" class="table-form" />
        <div id="timer"></div>
    </form>

    <a href="index.php">
        <div class="knopka">
            <p>Прочитать инструкции</p>
        </div>
    </a>
</div>

</div>

<script>
    document.getElementById('ps').onkeypress = function (e) {
        return !(/[А-Яа-яA-Za-z/"/'!@#$%^&*()_+<>, ]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('pn').onkeypress = function (e) {
        return !(/[А-Яа-яA-Za-z/"/'!@#$%^&*()_+<>,]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('fa').onkeypress = function (e) {
        return !(/[A-Za-z0-9/'/"!@#$%^&*()_+-?></]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('na').onkeypress = function (e) {
        return !(/[A-Za-z0-9/'/"!@#$%^&*()_+-?></]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('fn').onkeypress = function (e) {
        return !(/[A-Za-z0-9/'/"!@#$%^&*()_+-?></]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('jo').onkeypress = function (e) {
        return !(/[A-Za-z0-9/"/'!@#$%^&*()_+<>,]/.test(String.fromCharCode(e.charCode)));
    }
</script>
<script>
    document.getElementById('bo').onkeypress = function (e) {
        return !(/[A-Za-z0-9/"/'!@#$%^&*()_+<>,]/.test(String.fromCharCode(e.charCode)));
    }
</script>
{*
<script>
    function test_name(){
        var FIO = new Array();
        do
        {
            FIO = name;
            var reg = /^[а-яА-ЯёЁa-zA-Z. ]+$/;
            var rez = reg.test(FIO);
            if (rez == false)
            {
                alert ("Не коректно, Введите заново ФИО");
            }
            if (rez == true)
            {
                alert ("коректно");
                break;
            }
        }
        while (true);
        alert ("Спасибо за сотрудничество!");
    }
</script>
*}
