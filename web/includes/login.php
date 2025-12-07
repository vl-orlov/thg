<div class="login_page">
    <div class="login_lang" onclick="toggleLoginLangMenu()">
        <img src="img/icons/lang.png">
        <span id="current-lang">ES</span>
        <ul id="login_lang_menu" class="login_lang_menu hidden">
            <li onclick="setLang('login', 'es')">Español</li>
            <li onclick="setLang('login', 'en')">English</li>
        </ul>
    </div>
    <div class="login_container">
        <h1 class="login_title" data-i18n="login_title">Datos de Acceso</h1>
        <div class="login_form">
            <div class="form_group">
                <label for="email" class="form_label" data-i18n="login_label_email">Email/teléfono:</label>
                <input 
                    type="text" 
                    id="email" 
                    name="email" 
                    class="form_input" 
                    data-i18n-placeholder="login_placeholder_email"
                    placeholder="..."
                >
            </div>
            <div class="form_group">
                <label for="password" class="form_label" data-i18n="login_label_password">Contraseña:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="form_input" 
                    data-i18n-placeholder="login_placeholder_password"
                    placeholder="**********"
                >
            </div>
            <button onclick="window.location.href='?page=home'" type="submit" class="login_submit_button" data-i18n="login_submit_button">Iniciar sesión</button>
        </div>
        <div class="login_character">
            <img src="img/ferret_happy.svg" class="login_character_image">
        </div>
    </div>
</div>

<script>
function toggleLoginLangMenu() {
  const menu = document.getElementById('login_lang_menu');
  menu.classList.toggle('hidden');
}
document.addEventListener('DOMContentLoaded', () => {
  initLang('login');
});
document.addEventListener('click', function (e) {
  const langBox = document.querySelector('.login_lang');
  const menu = document.getElementById('login_lang_menu');
  if (langBox && !langBox.contains(e.target)) {
    menu.classList.add('hidden');
  }
});
</script>

