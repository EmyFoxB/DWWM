const btn = document.querySelector('.btn')
const body = document.querySelector('body')

function removeElement(element) {
    if (element && element.parentNode) {
        element.parentNode.removeChild(element);
    }
}

const div1 = document.createElement ('div');
const div2 = document.createElement ('div');
btn.addEventListener('click', () => {
    div1.className = 'div1';
    body.appendChild(div1);




    setTimeout(function (){
        div2.className = 'div2';
        body.appendChild(div2);

    },5000);

    div1.addEventListener('click', () =>{
        removeElement(div1);
    });

    div2.addEventListener('click', () =>{
        removeElement(div2);
    });

});

