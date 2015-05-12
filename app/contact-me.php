<?php include 'header.php'; ?>
    <?php include 'header-block.php'; ?>
        <div class="content-container clearfix">
            <?php include 'sidebar.php'; ?>
            <!-- content -->
            <div class="content-wrap">
                <section class="bg-block">
                    <h2 class="contactme-section-title">У вас интересный проект? Напишите мне</h2>
                    <div class="cotactme-entry clearfix">
                        <form name="contact-me" action="" method="POST" class="clearfix">
                            <div class="js-input-wrap clearfix">
                                <div class="contactme-form-input-wrap-left ">
                                    <label for="your-name" class="label-form">Имя</label>
                                    <input type="text" id="your-namet" class="input-form small-input" name="your-name" placeholder="Как к Вам обращаться">
                                    <div class="tooltip-contact-me tooltip-input-error tooltip-error-left hidden">Введите Ваше имя</div>
                                </div>

                                <div class="contactme-form-input-wrap-right ">
                                    <label for="email" class="label-form">Email</label>
                                    <input type="text" id="email" class="input-form small-input" name="email" placeholder="Куда мне писать">
                                    <div class="tooltip-contact-me tooltip-input-error tooltip-error-right hidden">Введите Email</div>
                                </div>
                            </div>

                            <div class="contactme-form-input-wrap js-input-wrap">
                                <label for="contactme-message" class="label-form">Сообщение</label>
                                <textarea type="text" id="contactme-message" class="input-form contactme-textarea-form" name="contactme-message" placeholder="Кратко в чем суть"></textarea>
                                <div class="tooltip-contact-me tooltip-input-error tooltip-error-left hidden">Введите описание</div>
                            </div>

                            <div class="contactme-form-input-wrap clearfix js-input-wrap">
                                <label for="capcha-cod" class="label-form">Введите код, указанный на картинке</label>
                                <div class="contactme-form-input-wrap-left capcha">
                               <img src="/img/captcha.png" alt="captcha">
                            </div>
                                <input type="text" id="capcha-cod" class="input-form small-input contactme-form-input-wrap-right capcha-cod" name="capcha-cod" placeholder="Введите код">
                                <div class="tooltip-contact-me tooltip-input-error tooltip-error-right hidden">Введите символы</div>
                            </div>


                            <div class="contactme-form-input-wrap clearfix js-input-wrap">
                                <input type="submit" name="submit" class="contactme-form-button submit-button" value="Отправить">
                                <input type="reset" name="reset" class="contactme-form-button reset-button" value="Отчистить">
                            </div>
                        </form>   
                    </div>
                </section>
            </div>
        </div>
<?php include 'footer.php'; ?>