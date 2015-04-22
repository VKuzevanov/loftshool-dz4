$(function addColorAndLineMenu() {                                      // Когда страница загрузится
    $('.menu-item a').each(function () {             // получаем все нужные нам ссылки
        var location = window.location.href; // получаем адрес страницы
        var link = this.href;                // получаем адрес ссылки
        if(location == link) {               // при совпадении адреса ссылки и адреса окна
            $(this).parent().addClass('active');  //добавляем класс родительскому элементу ссылки (добовляем подсветку)
            $(this).parent().prev().addClass('no-line');//добавляем класс предыдущему родительскому элементу ссылки (убираем линию)
        }
    });
});

$(function cutLongText() {
	var size = 48; //кол-во символов
	var elem = $('.works-description'); // какой эл. проверяем
	$.each(elem,function(){	
	var text = $(this).html();	//кол-во самволов в эл-те
	if (text.length > size) {text = text.slice(0, size);} //сравниваем
$(this).html(text + '...');  // добовлаем ...
});	
});

