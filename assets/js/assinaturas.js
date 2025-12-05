document.addEventListener('DOMContentLoaded', () => {
    const buttons       = document.querySelectorAll('.arquitetura-buttons .btn-ass');
    const images        = document.querySelectorAll('.assinaturas-images img');
    const textBoxes     = document.querySelectorAll('.debora-text'); // mobile + desktop
    const mobileDesc    = document.querySelector('.skill-block-mobile > p');
    const desktopDesc   = document.querySelector('.text-container.is-hidden-mobile p.mt5');

    const profiles = [
        {
            nome: "Débora Aguiar",
            cargo: "arquiteta e urbanista",
            descricao: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae viverra eros. Integer quis dignissim justo. Maecenas et urna sed velit sodales luctus.",
            descricaoMobile: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vitae viverra eros."
        },
        {
            nome: "Ana Holzer",
            cargo: "paisagista",
            descricao: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at sapien viverra, condimentum arcu vitae, ultricies eros. Aliquam sit amet ex non leo sollicitudin aliquet.",
            descricaoMobile: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at sapien viverra."
        },
        {
            nome: "Frederico Carstens",
            cargo: "designer de interiores",
            descricao: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi. Cras egestas, lorem sit amet maximus ultrices, magna nulla pulvinar massa, a aliquam lacus purus ac nibh.",
            descricaoMobile: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla facilisi."
        },
        {
            nome: "Antônio José Gonçalves",
            cargo: "especialista em luminotécnica",
            descricao: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula, urna eget mattis aliquet, lacus quam tristique nibh, sit amet luctus elit augue nec sem.",
            descricaoMobile: "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vehicula urna eget mattis aliquet."
        }
    ];

    // segurança: se não achar os elementos principais, não faz nada
    if (!buttons.length) return;

    buttons.forEach((btn, index) => {
        btn.addEventListener('click', () => {

            // BOTÕES
            buttons.forEach(b => b.classList.remove('is-active'));
            btn.classList.add('is-active');

            // IMAGENS
            images.forEach(img => img.classList.remove('is-active'));
            if (images[index]) {
                images[index].classList.add('is-active');
            }

            // NOME + CARGO (mobile + desktop)
            textBoxes.forEach(box => {
                box.innerHTML = `
                    <strong class="font-secondary">${profiles[index].nome}</strong><br>
                    ${profiles[index].cargo}
                `;
            });

            // TEXTOS DESCRITIVOS
            if (mobileDesc) {
                mobileDesc.textContent = profiles[index].descricaoMobile || profiles[index].descricao;
            }

            if (desktopDesc) {
                desktopDesc.textContent = profiles[index].descricao;
            }
        });
    });
});
