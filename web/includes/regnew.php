<div class="reg_page">
    <div class="reg_lang" onclick="toggleRegLangMenu()">
        <img src="img/icons/lang.png">
        <span id="current-lang">ES</span>
        <ul id="reg_lang_menu" class="reg_lang_menu hidden">
            <li onclick="setLang('regnew', 'es')">Español</li>
            <li onclick="setLang('regnew', 'en')">English</li>
        </ul>
    </div>
    <div class="reg_container">
        <h1 class="reg_title" data-i18n="reg_title">Mis Datos</h1>
        <div class="reg_form">
            <div class="reg_form_group">
                <label for="nombre" class="reg_form_label" data-i18n="reg_label_nombre">Nombre:</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    class="reg_form_input" 
                    data-i18n-placeholder="reg_placeholder_nombre"
                    placeholder="..."
                >
            </div>
            <div class="reg_form_group">
                <label for="apellido" class="reg_form_label" data-i18n="reg_label_apellido">Apellido:</label>
                <input 
                    type="text" 
                    id="apellido" 
                    name="apellido" 
                    class="reg_form_input" 
                    data-i18n-placeholder="reg_placeholder_apellido"
                    placeholder="..."
                >
            </div>
            <div class="reg_form_group">
                <label for="telefono" class="reg_form_label" data-i18n="reg_label_telefono">Teléfono:</label>
                <input 
                    type="tel" 
                    id="telefono" 
                    name="telefono" 
                    class="reg_form_input" 
                    data-i18n-placeholder="reg_placeholder_telefono"
                    placeholder="+XX XXX XXX XXXX"
                >
            </div>
            <div class="reg_form_group">
                <label for="email" class="reg_form_label" data-i18n="reg_label_email">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="reg_form_input" 
                    data-i18n-placeholder="reg_placeholder_email"
                    placeholder="..."
                >
            </div>
            <div class="reg_form_group">
                <label for="password" class="reg_form_label" data-i18n="reg_label_password">Contraseña:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="reg_form_input" 
                    data-i18n-placeholder="reg_placeholder_password"
                    placeholder="**********"
                >
            </div>
            <div class="reg_form_group">
                <label for="password_repeat" class="reg_form_label" data-i18n="reg_label_password_repeat">Repetir contraseña:</label>
                <input 
                    type="password" 
                    id="password_repeat" 
                    name="password_repeat" 
                    class="reg_form_input" 
                    data-i18n-placeholder="reg_placeholder_password_repeat"
                    placeholder="**********"
                >
            </div>
            <button onclick="window.location.href='?page=profile'" type="submit" class="reg_submit_button" data-i18n="reg_submit_button">Registrarme</button>
        </div>
    </div>
</div>

<script>
function toggleRegLangMenu() {
  const menu = document.getElementById('reg_lang_menu');
  menu.classList.toggle('hidden');
}
document.addEventListener('DOMContentLoaded', () => {
  initLang('regnew');
});
document.addEventListener('click', function (e) {
  const langBox = document.querySelector('.reg_lang');
  const menu = document.getElementById('reg_lang_menu');
  if (langBox && !langBox.contains(e.target)) {
    menu.classList.add('hidden');
  }
});
</script>