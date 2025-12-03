<div class="home_page">
    <div class="home_lang" onclick="toggleHomeLangMenu()">
        <img src="img/icons/lang.png">
        <span id="current-lang">Es</span>
        <ul id="home_lang_menu" class="home_lang_menu hidden">
            <li onclick="setLang('home', 'es')">Español</li>
            <li onclick="setLang('home', 'en')">English</li>
        </ul>
    </div>
    <div class="home_container">
        <h1 class="home_title" data-i18n="home_title">Mis Cursos</h1>
        <div class="daily_progress_card">
            <div class="daily_progress_label" data-i18n="home_daily_progress_label">Aprendido hoy</div>
            <div class="daily_progress_time">
                <span class="daily_progress_current">46min</span>
                <span class="daily_progress_total">/60min</span>
            </div>
            <div class="daily_progress_bar">
                <div class="daily_progress_fill" style="width: 76.67%;"></div>
            </div>
        </div>
        <div class="courses_grid">
            <div class="course_card course_card_pink">
                <div class="course_card_content">
                    <h3 class="course_title" data-i18n="home_course1_title">HTML desde cero</h3>
                    <div class="course_progress_bar">
                        <div class="course_progress_fill" style="width: 58.33%;"></div>
                    </div>
                    <div class="course_completion">
                        <div class="course_completion_text">
                            <span class="course_completion_label" data-i18n="home_course_completed">Completado</span>
                            <span class="course_completion_count">14/24</span>
                        </div>
                        <button class="course_play_button course_play_button_pink" aria-label="Play course" data-i18n-aria-label="home_play_course_aria">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5V19L19 12L8 5Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="course_card course_card_blue">
                <div class="course_card_content">
                    <h3 class="course_title" data-i18n="home_course2_title">HTML avanzado</h3>
                    <div class="course_progress_bar">
                        <div class="course_progress_fill" style="width: 66.67%;"></div>
                    </div>
                    <div class="course_completion">
                        <div class="course_completion_text">
                            <span class="course_completion_label" data-i18n="home_course_completed">Completado</span>
                            <span class="course_completion_count">12/18</span>
                        </div>
                        <button class="course_play_button course_play_button_blue" aria-label="Play course" data-i18n-aria-label="home_play_course_aria">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5V19L19 12L8 5Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
            <div class="course_card course_card_teal">
                <div class="course_card_content">
                    <h3 class="course_title" data-i18n="home_course3_title">HTML desde cero</h3>
                    <div class="course_progress_bar">
                        <div class="course_progress_fill" style="width: 62.5%;"></div>
                    </div>
                    <div class="course_completion">
                        <div class="course_completion_text">
                            <span class="course_completion_label" data-i18n="home_course_completed">Completado</span>
                            <span class="course_completion_count">10/16</span>
                        </div>
                        <button class="course_play_button course_play_button_teal" aria-label="Play course" data-i18n-aria-label="home_play_course_aria">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 5V19L19 12L8 5Z" fill="white"/>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? include "includes/footer.php"; ?>
</div>

<script>
function toggleHomeLangMenu() {
  const menu = document.getElementById('home_lang_menu');
  menu.classList.toggle('hidden');
}
document.addEventListener('DOMContentLoaded', () => {
  initLang('home');
});
document.addEventListener('click', function (e) {
  const langBox = document.querySelector('.home_lang');
  const menu = document.getElementById('home_lang_menu');
  if (langBox && !langBox.contains(e.target)) {
    menu.classList.add('hidden');
  }
});
</script>