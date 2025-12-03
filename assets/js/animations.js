document.addEventListener('DOMContentLoaded', () => {

    // ===== utilitários =====
    function addAnimatedAfter(el, delay = 0) {
        if (!el) return;
        if (el.classList.contains('animated')) return;
        setTimeout(() => el.classList.add('animated'), Math.max(0, delay));
    }

    function getFirstAnimationClass(el) {
        return Array.from(el.classList).find(c => c.indexOf('animation_') !== -1) || null;
    }

    // Configuração: por classe de animação você controla delay base (ms), duration (ms) e stagger (ms por índice)
    const animationConfig = {
        default: { delay: 0, duration: 1000, stagger: 0 },
        'animation_bottom_d2': { delay: 1000, stagger: 50 },
        'animation_left_d2': { delay: 1000, stagger: 40 },

        'animation_left': { delay: 1100, stagger: 40 },
        'animation_left_d1': { delay: 1150, stagger: 40 },
        'animation_right_d1': { delay: 1200, stagger: 40 },
        'animation_elastic_d1': { delay: 1250, stagger: 50 },

        'animation_bottom_d1': { delay: 1200, stagger: 0 },
        'animation_bottom': { delay: 1200, stagger: 40 },
        'animation_right': { delay: 1200, stagger: 40 },
        // adicione ou ajuste entradas conforme necessário
    };

    // ===== função principal: aplica 'animated' a todos elementos com 'animation_' e sem 'waypoint' =====
    function triggerAnimationsForAll(options = {}) {
        // Seleciona elementos que contenham 'animation_' no atributo class e que NÃO tenham 'waypoint'
        const selector = '[class*="animation_"]';
        const all = Array.from(document.querySelectorAll(selector))
            .filter(el => !el.classList.contains('waypoint'));

        // opcional: ordenar por posição no DOM (já é por querySelectorAll), mas se quiser por prioridade pode ajustar aqui
        all.forEach((el, idx) => {
            // prioridade: data-anim-delay / data-anim-duration -> mapeamento por classe -> default
            const dataDelay = el.getAttribute('data-anim-delay');
            const dataDuration = el.getAttribute('data-anim-duration');

            const animClass = getFirstAnimationClass(el) || 'default';
            const cfg = animationConfig[animClass] || animationConfig.default;

            const duration = dataDuration ? parseInt(dataDuration, 10) : cfg.duration;
            // se dataDelay for fornecido, usa como absolute; caso contrário usa delay base + idx * stagger
            const delay = (dataDelay ? parseInt(dataDelay, 10) : (cfg.delay + (idx * (cfg.stagger || 0))));

            // define variável CSS --anim-duration para controle via CSS
            if (duration) {
                el.style.setProperty('--anim-duration', `${duration}ms`);
            }

            addAnimatedAfter(el, delay);
        });
    }

    // ===== observar o paper-background específico e disparar as animações quando ele ganhar 'animated' =====
    const paperSelector = '.paper-background.waypoint.animation_bottom_d1';
    const paper = document.querySelector(paperSelector);

    if (paper) {
        const paperObserver = new MutationObserver((mutations) => {
            for (const m of mutations) {
                if (m.type === 'attributes' && m.attributeName === 'class' && paper.classList.contains('animated')) {
                    triggerAnimationsForAll();
                    paperObserver.disconnect();
                    break;
                }
            }
        });
        paperObserver.observe(paper, { attributes: true });

        // se já tiver animated no carregamento, dispara imediatamente
        if (paper.classList.contains('animated')) {
            triggerAnimationsForAll();
            paperObserver.disconnect();
        }
    }

    // ===== compatibilidade: lógica antiga do bigArrow (mantida, apenas mais robusta) =====
    const bigArrow = document.querySelector('.section-about .big-arrow');
    if (bigArrow) {
        const xLeft = document.querySelector('.section-about .x-left');
        const xRight = document.querySelector('.section-about .x-right');
        const xFloat = document.querySelector('.section-about .x-float');
        const ceoGuy = document.querySelector('.section-about .ceo-guy');

        const observer = new MutationObserver((mutations) => {
            for (const m of mutations) {
                if (m.type === 'attributes' && m.attributeName === 'class' && bigArrow.classList.contains('animated')) {

                    if (xLeft) addAnimatedAfter(xLeft, 800);
                    if (ceoGuy) addAnimatedAfter(ceoGuy, 500);
                    if (xRight) addAnimatedAfter(xRight, 800);
                    if (xFloat) addAnimatedAfter(xFloat, 800);

                    observer.disconnect();
                    break;
                }
            }
        });

        observer.observe(bigArrow, { attributes: true });

        // suporte: se PAGE global for definido e for 'institucional', ativa já
        try {
            if (typeof PAGE !== 'undefined' && PAGE === 'institucional') {
                bigArrow.classList.add('animated');
            }
        } catch (e) { /* ignore */ }
    }

    // ===== utilidade: função pública opcional para disparar manualmente =====
    // window.triggerAnimationsForAll = triggerAnimationsForAll;
});