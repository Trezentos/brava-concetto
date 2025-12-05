<div class="side-form animation_right_d3 animated">
    <p>
        deseja receber informações <br>
        atualizadas do Brava Concetto?
    </p>

    <div class="seta-div mt40-mobile">
        <p class="color-white font-secondary ">quero</p>
        <img src="<?=IMG.'icons/double-right.svg'?>" class="double-arrow" alt="">
    </div>


    <div class="form-block">

        <form id="form-contato" class="form-contato" action="" method="post">
            <button class="close-btn pt10 pr10 pb10 pl10">
                <img src="<?=IMG.'icons/close-form.svg'?>" type="button" class="close-btn" alt="">
            </button>

            <input type="text" name="nome" class="input" placeholder="Nome completo" required />

            <input type="text" name="telefone" class="input telefone" placeholder="Telefone / Whatsapp" required />

            <input type="email" name="email" class="input" placeholder="E-mail" required />

            <div class="checkbox-group mt20">


                <label class="checkbox">
                    <input type="checkbox" class="checkbox" name="aceite_politica" required>
                    <span class="font-tertiary">Declaro que li e aceito os termos da <span>Política de Privacidade</span>.</span>
                </label>

                <label class="checkbox mt10">
                    <input type="checkbox" class="checkbox" name="aceite_contato" required>
                    <span class="font-tertiary">Estou de acordo em receber comunicações e ser acessado para possível atendimento.</span>
                </label>
            </div>

            <div class="mt20 button-container ">
                <button class="btn" type="submit" name="submit">
                    <span class="loading-animation"></span>
                    <span class="font-secondary text">quero receber</span>
                </button>

            </div>

        </form>
    </div>
</div>