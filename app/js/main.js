
$(function addColorAndLineMenu() {
    $('.menu-item a').each(function () {
        // получаем адрес страницы  и игнорируем в ссылке брааузера POSTданные при добавлении нового проекта          
        var location = window.location.href.split('?')[0], 
        // получаем адрес ссылки
            link = this.href;
            // при совпадении адреса ссылки и адреса окна
            if(location == link) {
            //добавляем класс родительскому элементу ссылки (добовляем подсветку)
            $(this).parent().addClass('active');
            //добавляем класс предыдущему родительскому элементу ссылки (убираем линию)
            $(this).parent().prev().addClass('no-line');
        }
    });
});

$(function cutLongText() {
	var 
     //кол-во символов
    size = 38,
    // какой эл. проверяем
	elem = $('div.works-description');
	
    $.each(elem, function(){
        //кол-во самволов в эл-те
	   var text = $(this).html();
       //сравниваем
	       if (text.length > size) {
            text = text.slice(0, size);
        }
        // добовлаем ...
        $(this).html(text + '...');
    });
});
