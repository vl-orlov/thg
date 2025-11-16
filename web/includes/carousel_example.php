<div class="carousel_example">
    <div class="carousel_container">
        <button class="carousel_arrow prev" aria-label="Previous slide">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z"/>
            </svg>
        </button>
        <button class="carousel_arrow next" aria-label="Next slide">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z"/>
            </svg>
        </button>

        <button class="skip_button">Skip</button>

        <div class="carousel_slide active">
            <div class="slide_content">
                <h1 class="slide_title">Training By Gaming</h1>
                <p class="slide_subtitle">Aprendé a programar jugando</p>
                <button class="start_button">
                    <img src="img/icons/button_empezar.svg" alt="EMPEZAR" class="start_button_image">
                </button>
                <img src="img/ferret.svg" alt="Training By Gaming" class="slide_image">
            </div>
        </div>
        
        <div class="carousel_slide">
            <div class="slide_content">
                <img src="img/ferrets.svg" alt="Aprendé jugando y en comunidad" class="slide_image">
                <h2 class="slide_title">Aprendé jugando y en comunidad</h2>
                <p class="slide_description">
                    Cursos breves, prácticos y pensados para mujeres que quieren aprender nuevas tecnologías con flexibilidad
                </p>
            </div>
        </div>
        
        <div class="carousel_slide">
            <div class="slide_content">
                <img src="img/ferret_slide.svg" class="ferret_slide">
                <h2 class="slide_title">Creá tu propio camino</h2>
                <p class="slide_description">
                    Aprende a programar paso a paso, completando misiones y ganando experiencia
                </p>
                <div class="button_group">
                    <button class="login_button">Iniciar sesión</button>
                    <button class="register_button">Registrarte</button>
                </div>
            </div>
        </div>
        
        <div class="carousel_dots">
            <button class="carousel_dot active" aria-label="Slide 1"></button>
            <button class="carousel_dot" aria-label="Slide 2"></button>
            <button class="carousel_dot" aria-label="Slide 3"></button>
        </div>
    </div>
</div>

<script>
(function() {
    'use strict';
    
    const carousel_example = document.querySelector('.carousel_example');
    if (!carousel_example) return;
    
    const slides = carousel_example.querySelectorAll('.carousel_slide');
    const prevBtn = carousel_example.querySelector('.carousel_arrow.prev');
    const nextBtn = carousel_example.querySelector('.carousel_arrow.next');
    const skipBtn = carousel_example.querySelector('.skip_button');
    const dots = carousel_example.querySelectorAll('.carousel_dot');
    const container = carousel_example.querySelector('.carousel_container');
    
    let currentSlide = 0;
    const totalSlides = slides.length;
    let isTransitioning = false;
    let touchStartX = 0;
    let touchEndX = 0;
    
    // Функция для показа конкретного слайда
    function showSlide(index, direction = 'next') {
        if (isTransitioning || index < 0 || index >= totalSlides) return;
        
        isTransitioning = true;
        
        // Убираем активный класс со всех слайдов
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            if (i === index) {
                slide.classList.add('active');
            }
        });
        
        // Обновляем точки навигации
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        
        // Показываем/скрываем стрелки в зависимости от позиции
        if (prevBtn) {
            prevBtn.style.display = index === 0 ? 'none' : 'flex';
            prevBtn.style.opacity = index === 0 ? '0.3' : '1';
        }
        if (nextBtn) {
            nextBtn.style.display = index === totalSlides - 1 ? 'none' : 'flex';
            nextBtn.style.opacity = index === totalSlides - 1 ? '0.3' : '1';
        }
        
        // Показываем/скрываем кнопку Skip только на первых двух слайдах
        if (skipBtn) {
            skipBtn.style.display = index < 2 ? 'block' : 'none';
        }
        
        // Сбрасываем флаг после завершения анимации
        setTimeout(() => {
            isTransitioning = false;
        }, 500);
    }
    
    // Переход к следующему слайду
    function nextSlide() {
        if (isTransitioning) return;
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide, 'next');
    }
    
    // Переход к предыдущему слайду
    function prevSlide() {
        if (isTransitioning) return;
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(currentSlide, 'prev');
    }
    
    // Переход к конкретному слайду
    function goToSlide(index) {
        if (isTransitioning) return;
        currentSlide = index;
        showSlide(currentSlide);
    }
    
    // Обработчики для стрелок
    if (nextBtn) {
        nextBtn.addEventListener('click', (e) => {
            e.preventDefault();
            nextSlide();
        });
    }
    
    if (prevBtn) {
        prevBtn.addEventListener('click', (e) => {
            e.preventDefault();
            prevSlide();
        });
    }
    
    // Обработчики для точек навигации
    dots.forEach((dot, index) => {
        dot.addEventListener('click', (e) => {
            e.preventDefault();
            goToSlide(index);
        });
    });
    
    // Обработчик для кнопки Skip - переходит на последний слайд
    if (skipBtn) {
        skipBtn.addEventListener('click', (e) => {
            e.preventDefault();
            goToSlide(totalSlides - 1); // Переход на последний слайд (индекс 2)
        });
    }
    
    // Поддержка свайпов для мобильных устройств
    if (container) {
        container.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        }, { passive: true });
        
        container.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        }, { passive: true });
    }
    
    function handleSwipe() {
        const swipeThreshold = 50;
        const diff = touchStartX - touchEndX;
        
        if (Math.abs(diff) > swipeThreshold) {
            if (diff > 0) {
                // Свайп влево - следующий слайд
                nextSlide();
            } else {
                // Свайп вправо - предыдущий слайд
                prevSlide();
            }
        }
    }
    
    // Поддержка клавиатуры
    document.addEventListener('keydown', (e) => {
        if (!carousel_example.contains(document.activeElement) && 
            !carousel_example.matches(':hover')) return;
        
        if (e.key === 'ArrowLeft') {
            e.preventDefault();
            prevSlide();
        } else if (e.key === 'ArrowRight') {
            e.preventDefault();
            nextSlide();
        }
    });
    
    // Инициализация - показываем первый слайд
    showSlide(0);
})();
</script>

