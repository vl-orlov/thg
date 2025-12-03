<div class="profile_page">
    <div class="profile_lang" onclick="toggleProfileLangMenu()">
        <img src="img/icons/lang.png">
        <span id="current-lang">Es</span>
        <ul id="profile_lang_menu" class="profile_lang_menu hidden">
            <li onclick="setLang('profile', 'es')">Español</li>
            <li onclick="setLang('profile', 'en')">English</li>
        </ul>
    </div>
    <div class="profile_container">
        <h1 class="profile_title" data-i18n="profile_title">Mis Datos</h1>
        <div class="profile_avatar_wrapper">
            <div class="profile_avatar">
                <img src="img/ferret_happy.svg" alt="Avatar" class="profile_avatar_image" data-i18n-alt="profile_avatar_alt">
            </div>
            <button class="profile_edit_icon" aria-label="Edit avatar" data-i18n-aria-label="profile_edit_avatar_aria">
                <img src="img/icons/edit_icon.svg" alt="Edit" class="profile_edit_icon_image" data-i18n-alt="profile_edit_icon_alt">
            </button>
        </div>
        <div class="profile_form">
            <div class="profile_form_group">
                <label for="nombre" class="profile_form_label" data-i18n="profile_label_nombre">Nombre:</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    class="profile_form_input" 
                    value="María"
                >
            </div>
            <div class="profile_form_group">
                <label for="apellido" class="profile_form_label" data-i18n="profile_label_apellido">Apellido:</label>
                <input 
                    type="text" 
                    id="apellido" 
                    name="apellido" 
                    class="profile_form_input" 
                    value="López"
                >
            </div>
            <div class="profile_form_group">
                <label for="telefono" class="profile_form_label" data-i18n="profile_label_telefono">Teléfono:</label>
                <input 
                    type="tel" 
                    id="telefono" 
                    name="telefono" 
                    class="profile_form_input" 
                    data-i18n-placeholder="profile_placeholder_telefono"
                    placeholder="+XX XXX XXX XXXX"
                >
            </div>
            <div class="profile_form_group">
                <label for="email" class="profile_form_label" data-i18n="profile_label_email">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="profile_form_input" 
                    value="marialopez@gmail.com"
                >
            </div>
            <div class="profile_form_group">
                <label for="password" class="profile_form_label" data-i18n="profile_label_password">Cambiar contraseña:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="profile_form_input" 
                    data-i18n-placeholder="profile_placeholder_password"
                    placeholder="............"
                >
            </div>
            <button type="submit" class="profile_submit_button" data-i18n="profile_submit_button">Guardar cambios</button>
        </div>
    </div>
    <? include "includes/footer.php"; ?>
</div>

<script>
function toggleProfileLangMenu() {
  const menu = document.getElementById('profile_lang_menu');
  menu.classList.toggle('hidden');
}
document.addEventListener('DOMContentLoaded', () => {
  initLang('profile');
});
document.addEventListener('click', function (e) {
  const langBox = document.querySelector('.profile_lang');
  const menu = document.getElementById('profile_lang_menu');
  if (langBox && !langBox.contains(e.target)) {
    menu.classList.add('hidden');
  }
});
</script>