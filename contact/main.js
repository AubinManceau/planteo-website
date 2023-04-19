let aide1 = document.getElementById('aide-1')
let aide2 = document.getElementById('aide-2')
let aide3 = document.getElementById('aide-3')
let aide4 = document.getElementById('aide-4')
let aide5 = document.getElementById('aide-5')
let aide6 = document.getElementById('aide-6')

let angle1 = document.getElementById('angle-1')
let angle2 = document.getElementById('angle-2')
let angle3 = document.getElementById('angle-3')
let angle4 = document.getElementById('angle-4')
let angle5 = document.getElementById('angle-5')
let angle6 = document.getElementById('angle-6')

let accordeon1 = document.getElementById('accordeon1')
let accordeon2 = document.getElementById('accordeon2')
let accordeon3 = document.getElementById('accordeon3')
let accordeon4 = document.getElementById('accordeon4')
let accordeon5 = document.getElementById('accordeon5')
let accordeon6 = document.getElementById('accordeon6')


aide1.addEventListener('click', function(){
    if(angle1.classList.contains('fa-angle-down')){
        angle1.classList.remove('fa-angle-down')
        angle1.classList.add('fa-angle-up')
        accordeon1.classList.remove('hidden')
    }else{
        angle1.classList.add('fa-angle-down')
        angle1.classList.remove('fa-angle-up')
        accordeon1.classList.add('hidden')
    }
})

aide2.addEventListener('click', function(){
    if(angle2.classList.contains('fa-angle-down')){
        angle2.classList.remove('fa-angle-down')
        angle2.classList.add('fa-angle-up')
        accordeon2.classList.remove('hidden')
    }else{
        angle2.classList.add('fa-angle-down')
        angle2.classList.remove('fa-angle-up')
        accordeon2.classList.add('hidden')
    } 
})

aide3.addEventListener('click', function(){
    if(angle3.classList.contains('fa-angle-down')){
        angle3.classList.remove('fa-angle-down')
        angle3.classList.add('fa-angle-up')
        accordeon3.classList.remove('hidden')
    }else{
        angle3.classList.add('fa-angle-down')
        angle3.classList.remove('fa-angle-up')
        accordeon3.classList.add('hidden')
    } 
})

aide4.addEventListener('click', function(){
    if(angle4.classList.contains('fa-angle-down')){
        angle4.classList.remove('fa-angle-down')
        angle4.classList.add('fa-angle-up')
        accordeon4.classList.remove('hidden')
    }else{
        angle4.classList.add('fa-angle-down')
        angle4.classList.remove('fa-angle-up')
        accordeon4.classList.add('hidden')
    } 
})

aide5.addEventListener('click', function(){
    if(angle5.classList.contains('fa-angle-down')){
        angle5.classList.remove('fa-angle-down')
        angle5.classList.add('fa-angle-up')
        accordeon5.classList.remove('hidden')
    }else{
        angle5.classList.add('fa-angle-down')
        angle5.classList.remove('fa-angle-up')
        accordeon5.classList.add('hidden')
    } 
})

aide6.addEventListener('click', function(){
    if(angle6.classList.contains('fa-angle-down')){
        angle6.classList.remove('fa-angle-down')
        angle6.classList.add('fa-angle-up')
        accordeon6.classList.remove('hidden')
    }else{
        angle6.classList.add('fa-angle-down')
        angle6.classList.remove('fa-angle-up')
        accordeon6.classList.add('hidden')
    }
})

