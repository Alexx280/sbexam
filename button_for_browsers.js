var user = detect.parse(navigator.userAgent);
//document.write(user.browser.family);

if (user.browser.family === 'IE'){
    document.write(
        '<div class="butt1"><form method="post" action="test.php"> <button type="submit" class="table-form" style="width: 120px"> Тест </button> </form></div>'+
        '<div class="butt2"><form method="post" action="curs_edu00.php"> <button type="submit" class="table-form" style="width: 120px"> Инструкции </button> </form></div>'
    );
}
else
{
    document.write('<div class="butt1"> <a href="test.php">  <button type="button" class="btn btn-success btn-lg btn3d" style="width: 135px"> <span class="glyphicon glyphicon-ok"></span>  Тест  </button>  </a></div>'+
    '<div class="butt2">  <a href="curs_edu00.php">   <button type="button" class="btn btn-success btn-lg btn3d">Инструкции</button>   </a> </div>');
}

