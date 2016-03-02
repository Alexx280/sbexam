
<!DOCTYPE HTML>
<html>
<head>
    <meta charset='UTF-8'>
    <title> Тест по информационной безопасности </title>
    <link rel='stylesheet' type='text/css' href='design.css'/>
    <link rel='stylesheet' type='text/css' href='animate.css'/>
    <script type="text/javascript" src="function.js"> </script>
    <script type="text/javascript" src="jquery.js" ></script>

</head>
<body>
<div class="wrapper">
    <div class="content">

        <div id='centr-w'>
            <div id='inner'>
                <p> Проверка знаний инструкций по информационной безопасности сотрудников ГК Лама </p>
            </div>
            <div id='centr' >
                    <form method="post" action="inter.php" >
                        Фамилия:<br>
                        <input type="text" id="fa" name="family" size="30" required="required"  title="Для ведения информации переключите клавиатуру в режим русских букв" ><br>
                        Имя:<br>
                        <input type="text" id="na" name="name" size="30" required="required" ><br>
                        Отчество:<br>
                        <input type="text" id="fn" name="father_name" size="30" required="required" ><br>
                        Паспорт<br>
                        Серия:  <input type="text" id="ps" name="pasp_s" size="4" required="required">
                        Номер:  <input type="text" id="pn" name="pasp_n" size="6" required="required"<br><br>
                        Организация (Юр.лицо):<br>

                        <select name="factory" style="width: 244px">
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
                            <option value="Новый Век ООО">"Новый Век" ООО</option>
                            <option value="Емельяненко ИП">"Емельяненко" ИП</option>
                            <option value="Централизованная Бухгалтерия ООО">"Централизованная  Бухгалтерия" </option>
                            <option value="УК Изумрудный город ООО">"УК "Изумрудный город" ООО</option>
                        </select><br>

                        Должность:<br>
                        <input type="text" name="job" id="jo" size="30" required="required" ><br>
                        Руководитель:<br>
                        <input type="text" name="boss" id="bo" size="30" required="required" placeholder="Фамилия И.О."><br>
                        Место проведения тестирования:<br>
                            <select name="place" style="width: 244px">
                                <option value="">Выберите из списка</option>
                                <option value="ТЦ Изумрудный город">ТЦ Изумрудный город</option>
                                <option value="ТЦ Мармелайт">ТЦ Мармелайт</option>
                                <option value="ТЦ СмайлСити">ТЦ СмайлСити</option>
                                <option value="ТЦ Манеж">ТЦ Манеж</option>
                                <option value="ТЦ Мирамикс">ТЦ Мирамикс</option>
                                <option value="Офис на ул.Карташова">Офис на ул.Карташова</option>
                                <option value="Офис на ул.Кулагина">Офис на ул.Кулагина</option>
                                <option value="Офис на ул.Ленина">Офис на ул.Ленина</option>
                            </select><br>
                        Код:<br>
                        <input type="text" name="code" id="co" size="30" required="required" placeholder="0000" title="Код получите у специалиста по безопасности"></br>
                        <br>
                        <input type="submit" value="Начать тест" class="table-form" />

                    </form>
                <div>
                    <form method="post" action="index.php">
                        <button type="submit" class="table-form"> На главную </button>
                    </form>
                </div>

            </div>
        </div>

        <div id="doc_time" >
            Дата и время
            <script >
                clock();
            </script>
        </div>
        <!--<div id='miss' class="animated bounceInUp">
            <img src="pic/acc.png" alt="картинка">
        </div>-->
    </div>
</div>

</body>
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
