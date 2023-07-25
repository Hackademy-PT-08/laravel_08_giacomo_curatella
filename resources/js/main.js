const btn = document.querySelector('#inserisci');

btn.addEventListener('click', ()=>{
    btn.classList.remove('animate__bounceInUp');
    btn.classList.add('animate__hinge');
})