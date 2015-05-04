// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// валидация формы
// 
/// popup form
$(document).ready(function(){
        //Скрыть PopUp при загрузке страницы    
        PopUpHide();
    });
    //Функция отображения PopUp
    function PopUpShow(){
        //плавное появление
        $("#popup1").show(500); 
        //добовляем класс к форме для появления
        $("#popup1").addClass('form-popup');
    }
    //Функция скрытия PopUp
    function PopUpHide(){
        //плавное исчезание
        $("#popup1").hide(500);
        //обнуляем поля формы
        $('form').trigger( 'reset' );
        //прячем сообщение об успехе и показываем форму при повтороной загрузке 
        $('#upload-done').hide();
        $('#contact-me').show();
        }

 
$(function() {
    //объявляем обект
    var app = {
        //функция инициализиции (запуска)
        initialize: function() {
        
            this.setUpListners();
        },
            //функция прослушки событий 
        setUpListners: function() {

            $('form').on('submit', app.submitForm);
            $('form').on('keydown', 'input, textarea', app.removeError);
            $('form').on('reset', app.removeError);

            $('.upload-input').on('change', app.removeError);
            $('.upload-input').on('change', app.imgValue);
        },
            //функция "захвата" данных их поля с типом file
        imgValue: function() {
            var val = $(this).val();
            $(this).prev().val(val);

        },
            //подтверждение формы 
        submitForm: function(e) {
            // не испоьзовать станрартоет действие при нажатии на кнопку submit
            e.preventDefault();

            var form = $(this);

            if(app.validateForm(form) === false) {
                return false;
            }
            else{
            $('#upload-done').show();
            $('#contact-me').hide();
            console.log('go in ajax');
            }

        },
         //проверка полей формы 
        validateForm: function(form) {

            var     
                //используем все поля кроме  submit и ложного поля картинки проекта
                inputs = form.find('input, textarea').not('input[id="fileName"], input[type="submit"]'),
                valid = true;

                

            $.each(inputs, function(i, val) {
                var 
                    input = $(val),
                    val = input.val(),
                    formGroup = input.parents('.form-input-wrap');
                    console.log(val);

                if(val.length === 0) {
                    $('#error').show();
                    formGroup.find('.tooltip-input-error').show();
                    formGroup.find('.input-form').addClass('input-error');
                    valid = false;
                }
                else{
                    formGroup.find('.tooltip-input-error').hide();
                    formGroup.find('.input-form').removeClass('input-error');
                }

            });

            return valid;
        },

        removeError: function() {
            $(this).parent().find('.tooltip-input-error').hide();
            $(this).parent().find('.input-form').removeClass('input-error');
            $('#error').hide();
        }

    };

    app.initialize();
    
}());
   