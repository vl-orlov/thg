<div class="profile_page">
    <div class="profile_container">
        <h1 class="profile_title">Mis Datos</h1>
        <div class="profile_avatar_wrapper">
            <div class="profile_avatar">
                <img src="img/ferret_happy.svg" alt="Avatar" class="profile_avatar_image">
            </div>
            <button class="profile_edit_icon" aria-label="Edit avatar">
                <img src="img/icons/edit_icon.svg" alt="Edit" class="profile_edit_icon_image">
            </button>
        </div>
        <div class="profile_form">
            <div class="profile_form_group">
                <label for="nombre" class="profile_form_label">Nombre:</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    class="profile_form_input" 
                    value="María"
                >
            </div>
            <div class="profile_form_group">
                <label for="apellido" class="profile_form_label">Apellido:</label>
                <input 
                    type="text" 
                    id="apellido" 
                    name="apellido" 
                    class="profile_form_input" 
                    value="López"
                >
            </div>
            <div class="profile_form_group">
                <label for="telefono" class="profile_form_label">Teléfono:</label>
                <input 
                    type="tel" 
                    id="telefono" 
                    name="telefono" 
                    class="profile_form_input" 
                    placeholder="+XX XXX XXX XXXX"
                >
            </div>
            <div class="profile_form_group">
                <label for="email" class="profile_form_label">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="profile_form_input" 
                    value="marialopez@gmail.com"
                >
            </div>
            <div class="profile_form_group">
                <label for="password" class="profile_form_label">Cambiar contraseña:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="profile_form_input" 
                    placeholder="............"
                >
            </div>
            <button type="submit" class="profile_submit_button">Guardar cambios</button>
        </div>
    </div>
    <? include "includes/footer.php"; ?>
</div>