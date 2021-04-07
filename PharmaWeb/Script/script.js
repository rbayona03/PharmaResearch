const next = document.querySelector('.nxt');
const prev = document.querySelector('.prev');
const container = document.querySelector('.facts');

let counter = 0;

next.addEventListener('click', nextSlide);
prev.addEventListener('click', prevSlide);

function nextSlide(){
    container.animate([{opacity:'0.1'},{opacity:'1.0'}],{duration:500, fill:'forwards'});
    if(counter === 3){
        counter = 0;
    }
    counter++;
    container.style.backgroundImage = `url(/Images/bcg-${counter}.png)`;
}

function prevSlide(){
    container.animate([{opacity:'0.1'},{opacity:'1.0'}],{duration:500, fill:'forwards'});
    if(counter === 0){
        counter = 4;
    }
    counter--;
    container.style.backgroundImage = `url(/Images/bcg-${counter}.png)`;
}

/*DropMenu*/

const navBarBtn = document.querySelector('.navBtn');
const navBarLinks = document.querySelector('.navbarLinks');

navBarBtn.addEventListener('click', function () {
    let value = navBarLinks.classList.contains('navbarDrop');

    if (value) {
        navBarLinks.classList.remove('navbarDrop');
        navBarBtn.classList.remove('change')
    }
    else {
        navBarLinks.classList.add('navbarDrop');
        navBarBtn.classList.add('change')


    }
});
