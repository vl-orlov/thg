<div class="reg_page">
    <div class="reg_container">
        <h1 class="reg_title">Mis Datos</h1>
        <div class="reg_form">
            <div class="reg_form_group">
                <label for="nombre" class="reg_form_label">Nombre:</label>
                <input 
                    type="text" 
                    id="nombre" 
                    name="nombre" 
                    class="reg_form_input" 
                    placeholder="..."
                >
            </div>
            <div class="reg_form_group">
                <label for="apellido" class="reg_form_label">Apellido:</label>
                <input 
                    type="text" 
                    id="apellido" 
                    name="apellido" 
                    class="reg_form_input" 
                    placeholder="..."
                >
            </div>
            <div class="reg_form_group">
                <label for="telefono" class="reg_form_label">Teléfono:</label>
                <input 
                    type="tel" 
                    id="telefono" 
                    name="telefono" 
                    class="reg_form_input" 
                    placeholder="+XX XXX XXX XXXX"
                >
            </div>
            <div class="reg_form_group">
                <label for="email" class="reg_form_label">Email:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    class="reg_form_input" 
                    placeholder="..."
                >
            </div>
            <div class="reg_form_group">
                <label for="password" class="reg_form_label">Contraseña:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    class="reg_form_input" 
                    placeholder="**********"
                >
            </div>
            <div class="reg_form_group">
                <label for="password_repeat" class="reg_form_label">Repetir contraseña:</label>
                <input 
                    type="password" 
                    id="password_repeat" 
                    name="password_repeat" 
                    class="reg_form_input" 
                    placeholder="**********"
                >
            </div>
            <button onclick="window.location.href='?page=profile'" type="submit" class="reg_submit_button">Registrarme</button>
        </div>
    </div>
</div>