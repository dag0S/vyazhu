<!-- Темный фон popup'а -->
<div class="popup-bg" id="popup">
    <a class="popup-bg__area" href="#"></a>

    <!-- Форма входа -->
    <div class="registration-popup authorization">
        <img class="registration-popup__planet" src="./img/registration-popup-planet-fon.png" alt="">
        <div class="registration-popup__wrapper">
            <a class="registration-popup__close" href="#"><img class="registration-popup__exit" src="./icons/x.svg" alt=""></a>
            <div class="title margin-bottom-18px">
                <h2 class="title__authorization title__authorization_activated">Вход</h2>
                <h2 class="title__registration title__registration_deactivated" id="signin">Регистрация</h2>
            </div>
            <form class="form" action="validation-form/auth.php" method="post">
                <label class="form__text margin-bottom-12px" for="">Логин</label>
                <input class="form__input margin-bottom-18px" type="email" placeholder="e-mail" name="login">
                <label class="form__text margin-bottom-12px" for="">Пароль</label>
                <input class="form__input margin-bottom-18px" type="password" placeholder="• • • • • •" name="pass">
                <div class="form__wrapp">
                    <p class="form__text3 margin-bottom-30px"><input class="form__checkbox"
                            type="checkbox">Запомнить меня</p>
                    <p class="form__forgot-password form__text3 pointer" id="forgot-password">Забыли пароль?</p>
                </div>
                <button class="form__btn form__btn_authorization margin-bottom-30px" type="submit">Войти</button>
                <div class="form__icon-wrapper">
                    <p class="form__text3 margin-bottom-30px">Войти с помощью</p>
                    <a href="#" class="form__icon">
                        <img class="form__img" src="./icons/vk-icon.svg" alt="Вк"></a>
                    <a href="#" class="form__icon">
                        <img class="form__img" src="./icons/google-icon.svg" alt="Google"></a>
                    <a href="#" class="form__icon">
                        <img class="form__img" src="./icons/facebook-icon.svg" alt="facebook"></a>
                    <a href="#" class="form__icon">
                        <img class="form__img" src="./icons/twitter-icon.svg" alt=""></a>
                    <a href="#" class="form__icon">
                        <img class="form__img" src="./icons/instagram-icon.svg" alt="instagram"></a>
                </div>
            </form>
        </div>
    </div>

    <!-- Форма регистрации -->
    <div class="registration-popup registration">
        <img class="registration-popup__planet" src="./img/registration-popup-planet-fon.png" alt="">
        <div class="registration-popup__wrapper">
        <a class="registration-popup__close" href="#"><img class="registration-popup__exit close-registration" src="./icons/x.svg" alt=""></a>
            <div class="title margin-bottom-18px">
                <h2 class="title__authorization open" id="signup">Вход</h2>
                <h2 class="title__registration">Регистрация</h2>
            </div>
            <form class="form" action="validation-form/check.php" method="post">
                <label class="form__text margin-bottom-12px" for="">Логин</label>
                <input class="form__input margin-bottom-18px" type="email" placeholder="e-mail" name="login">
                <label class="form__text margin-bottom-12px" for="">Пароль</label>
                <input class="form__input margin-bottom-18px" type="password" placeholder="• • • • • •" name="pass">
                <label class="form__text margin-bottom-12px" for="">Повторите пароль</label>
                <input class="form__input margin-bottom-18px" type="password" placeholder="• • • • • •" name="secondpass">
                <p class="form__text2 margin-bottom-30px"><input class="form__checkbox" type="checkbox">Я согласен с
                    политикой
                    конфиденциальности</p>
                <button class="form__btn" type="submit">Зарегистрироваться</button>
            </form>
        </div>
    </div>

    <!-- Форма востановления пароля -->
    <div class="registration-popup restore-password">
        <img class="registration-popup__planet" src="./img/registration-popup-planet-fon.png" alt="">
        <div class="registration-popup__wrapper">
        <a class="registration-popup__close" href="#"><img class="registration-popup__exit close-restore-password" src="./icons/x.svg" alt=""></a>
            <div class="title margin-bottom-40px">
                <h2 class="title__registration title__registration_password-recovery">Восстановление пароля</h2>
            </div>
            <form class="form" action="#">
                <p class="form__text margin-bottom-40px">Пожалуйста, введите адрес электронной почты, указанный в
                    параметрах вашей учетной записи. На него будет отправлен специальный код. После его получения вы
                    сможете ввести новый пароль для вашей учетной записи. </p>
                <label class="form__text margin-bottom-12px" for="">Адрес электронной почты </label>
                <input class="form__input margin-bottom-40px" type="email" placeholder="e-mail">
                <button class="form__btn form__btn_send">Отправить</button>
            </form>
        </div>
    </div>

</div>