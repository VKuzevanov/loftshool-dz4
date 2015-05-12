<?php
    include 'header.php';
?>
   
      
        <div class="content-container clearfix">
            
  
                <section class="bg-block login-block">
                    <h2 class="login-section-title">Авторизируйтесь</h2>
                    <div class="login-entry clearfix">
                        <form name="login-form" action="" method="GET">
                    
                            <div class="login-form-input-wrap js-input-wrap">
                                <label for="login" class="login-label-form">Логин</label>
                                <input type="text" id="login" class="login-input-form input-form" name="login" placeholder="Введите логин">
                                <div class="tooltip-login tooltip-input-error tooltip-error-left hidden">Введите логин</div>
                            </div>
                            <div class="login-form-input-wrap js-input-wrap">
                                <label for="password" class="login-label-form">Пароль</label>
                                <input type="password" id="password" class="login-input-form input-form" name="password" placeholder="Введите пароль">
                                <div class="tooltip-login tooltip-input-error tooltip-error-left hidden">Введите пароль</div>
                            </div>                     
                            <div class="login-submit-wrap">
                                <input type="submit" name="submit" class="login-submit-button" value="Войти">
                                
                            </div>
                        </form>   
                    </div>
                </section>
           
        </div>
<?php
    include 'footer.php';
?>