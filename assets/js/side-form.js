document.addEventListener('DOMContentLoaded', function () {
    const sideForm = document.querySelector('.side-form')
    const formBlock = document.querySelector('.form-block')

    console.log('opa')

    sideForm.addEventListener('click', ()=>{
        console.log(formBlock)

        formBlock.classList.add('is-active')
    })
})