// Окно входа
const popupHolderAuthorization = document.querySelector(".authorization")
const popupOpenAuthorization = document.querySelector(".nav__entry")

// Окно Регистрации
const popupHolderRegistration = document.querySelector(".registration")
const popupOpenRegistration = document.querySelector(".title__registration_deactivated")
const popupHolderOpen = document.querySelector(".open")

// Окно востановления пароля
const popupOpenForgotPassword = document.querySelector(".form__forgot-password")
const popupHolderRestorePassword = document.querySelector(".restore-password")

// Темный фон и крестик
const popupClose = document.querySelector(".registration-popup__exit")
const popupCloseRegistration = document.querySelector(".close-registration")
const popupCloseRestorePassword = document.querySelector(".close-restore-password")
const popupBackground = document.querySelector(".popup-bg")

popupOpenAuthorization.addEventListener("click", openPopupAuthorization)

popupOpenRegistration.addEventListener("click", openPopupRegistration)

popupClose.addEventListener("click", closePopup)
popupBackground.addEventListener("click", closePopup)

popupCloseRestorePassword.addEventListener("click", closePopupRestorePassword)

popupCloseRegistration.addEventListener("click", closePopupRegistration)

popupHolderOpen.addEventListener("click", openPopupAuthorization2)

popupOpenForgotPassword.addEventListener("click", openPopupRestorePassword)

function closePopup(){
    popupBackground.classList.remove("active")
    popupHolderAuthorization.classList.remove("active")
    popupHolderRegistration.classList.remove("active")
    popupHolderRestorePassword.classList.remove("active")

    popupBackground.classList.remove("active-second")
    popupHolderAuthorization.classList.remove("active-second")
    popupHolderRegistration.classList.remove("active-second")
    popupHolderRestorePassword.classList.remove("active-second")
}

function closePopupRegistration(){
    popupBackground.classList.remove("active")
    popupHolderRegistration.classList.remove("active-second")
    popupHolderRestorePassword.classList.remove("active-second")
}

function closePopupRestorePassword(){
    popupBackground.classList.remove("active")
    popupHolderRestorePassword.classList.remove("active-second")
}

function openPopupAuthorization(){
    popupBackground.classList.add("active")
    popupHolderAuthorization.classList.add("active")
}

function openPopupRegistration(){
    popupHolderRegistration.classList.add("active-second")
    popupHolderAuthorization.classList.remove("active")
}

function openPopupAuthorization2(){
    popupHolderRegistration.classList.remove("active-second")
    popupHolderAuthorization.classList.add("active-second")
}

function openPopupRestorePassword(){
    popupHolderAuthorization.classList.remove("active")
    popupHolderAuthorization.classList.remove("active-second")
    popupHolderRestorePassword.classList.add("active-second")
}




function onOpenForm(e){
    e.preventDefault();
}


