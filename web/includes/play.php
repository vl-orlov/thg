<div class="play_page">
    <div class="play_lang" onclick="togglePlayLangMenu()">
        <img src="img/icons/lang.png">
        <span id="current-lang">Es</span>
        <ul id="play_lang_menu" class="play_lang_menu hidden">
            <li onclick="setLang('play', 'es')">Español</li>
            <li onclick="setLang('play', 'en')">English</li>
        </ul>
    </div>
    <div class="play_container">
        <div class="video_player">
            <div class="video_player_image">
                <img src="img/img1.jpg" class="video_image">
            </div>
            <button class="video_play_button" aria-label="Play/Pause" data-i18n-aria-label="play_video_play_pause_aria">
                <svg width="60" height="60" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z" fill="white"/>
                </svg>
            </button>
            <div class="video_controls">
                <div class="video_time">
                    <span class="video_time_current">4:10</span>
                    <span class="video_time_separator">/</span>
                    <span class="video_time_total">6:10</span>
                </div>
                <div class="video_progress_bar">
                    <div class="video_progress_fill" style="width: 67.2%;"></div>
                </div>
                <button class="video_fullscreen_button" aria-label="Fullscreen" data-i18n-aria-label="play_video_fullscreen_aria">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 14H5v5h5v-2H7v-3zm-2-4h2V7h3V5H5v5zm12 7h-3v2h5v-5h-2v3zM14 5v2h3v3h2V5h-5z" fill="white"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <div class="course_info_card">
            <h1 class="course_info_title" data-i18n="play_course_title">HTML desde cero</h1>
            <div class="course_info_meta" data-i18n="play_course_meta">4h 20m • 12 desafíos</div>
            
            <div class="course_about_section">
                <div class="course_about_header">
                    <h2 class="course_about_title" data-i18n="play_course_about_title">Acerca de este curso</h2>
                    <button class="course_about_toggle" aria-label="Toggle section" data-i18n-aria-label="play_course_about_toggle_aria">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 10l5 5 5-5" stroke="#1F1F39" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>
                <p class="course_about_text" data-i18n="play_course_about_text">
                    Aprende los fundamentos de lenguaje y aplicalos en desafíos interactivos. Ganá XP, desbloqueá niveles y suma nuevas habilidades.
                </p>
            </div>
            
            <div class="lessons_list">
                <div class="lesson_item lesson_item_completed">
                    <div class="lesson_number">01</div>
                    <div class="lesson_content">
                        <div class="lesson_header">
                            <h3 class="lesson_title" data-i18n="play_lesson1_title">Introducción al código</h3>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="lesson_star_icon">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" fill="#FF6905"/>
                            </svg>
                        </div>
                        <div class="lesson_meta">
                            <span class="lesson_duration lesson_duration_completed">5:15 mins</span>
                            <img src="img/icons/check_icon.svg" alt="Completed" class="lesson_check_icon" data-i18n-alt="play_lesson_completed_alt">
                        </div>
                    </div>
                    <button class="lesson_play_button" aria-label="Play lesson" data-i18n-aria-label="play_lesson_play_aria">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M8 5v14l11-7z" fill="white"/>
                        </svg>
                    </button>
                </div>
                
                <div class="lesson_item lesson_item_active">
                    <div class="lesson_number">02</div>
                    <div class="lesson_content">
                        <div class="lesson_header">
                            <h3 class="lesson_title" data-i18n="play_lesson2_title">Estructura básica de HTML</h3>
                        </div>
                        <div class="lesson_meta">
                            <span class="lesson_duration">6:10 mins</span>
                        </div>
                    </div>
                    <button class="lesson_play_button lesson_play_button_active" aria-label="Pause lesson" data-i18n-aria-label="play_lesson_pause_aria">
                        <svg class="lesson_progress_ring" width="52" height="52" viewBox="0 0 52 52">
                            <circle cx="26" cy="26" r="23" fill="none" stroke="#FF6905" stroke-width="3" stroke-dasharray="96 96.5" stroke-dashoffset="0" transform="rotate(-90 26 26)"/>
                        </svg>
                        <svg class="lesson_play_icon" width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 4h4v16H6V4zm8 0h4v16h-4V4z" fill="white"/>
                        </svg>
                    </button>
                </div>
                
                <div class="lesson_item lesson_item_locked">
                    <div class="lesson_number">03</div>
                    <div class="lesson_content">
                        <div class="lesson_header">
                            <h3 class="lesson_title" data-i18n="play_lesson3_title">Desafío práctico</h3>
                        </div>
                        <div class="lesson_meta">
                            <span class="lesson_exercises" data-i18n="play_lesson_exercises">10 ejercicios</span>
                        </div>
                    </div>
                    <button class="lesson_play_button lesson_play_button_locked" aria-label="Locked lesson" data-i18n-aria-label="play_lesson_locked_aria" disabled>
                        <img src="img/icons/button_locked_icon.svg" alt="Locked" class="lesson_lock_icon" data-i18n-alt="play_lesson_locked_alt">
                    </button>
                </div>
            </div>
        </div>
        
        <div class="course_actions">
            <button class="course_favorite_button" aria-label="Add to favorites" data-i18n-aria-label="play_course_favorite_aria">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z" stroke="#FF6905" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                </svg>
            </button>
            <button class="course_start_button" data-i18n="play_course_start_button">Empezar/Continuar</button>
        </div>
    </div>
    <? include "includes/footer.php"; ?>
</div>

<script>
function togglePlayLangMenu() {
  const menu = document.getElementById('play_lang_menu');
  menu.classList.toggle('hidden');
}
document.addEventListener('DOMContentLoaded', () => {
  initLang('play');
});
document.addEventListener('click', function (e) {
  const langBox = document.querySelector('.play_lang');
  const menu = document.getElementById('play_lang_menu');
  if (langBox && !langBox.contains(e.target)) {
    menu.classList.add('hidden');
  }
});
</script>

