document.addEventListener('DOMContentLoaded', function () {
    const sideForm = document.querySelector('.side-form')
    const formBlock = document.querySelector('.form-block')
    const closeBtn = document.querySelector('.close-btn')



    sideForm.addEventListener('click', ()=>{
        formBlock.classList.add('is-active')
    })

    closeBtn.addEventListener('click', (e)=>{
        e.preventDefault();
        e.stopImmediatePropagation();
        formBlock.classList.remove('is-active')
    })
})