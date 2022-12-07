

const list=document.querySelector('#listname');


const searchBar =document.forms['search'].querySelector('input');


const courses=list.getElementsByClassName('product-style-one no-overlay');

searchBar.addEventListener('keyup',function(e){
    const term=e.target.value.toLowerCase();




    Array.from(courses).forEach(function(course){
        const text=course.getElementsByClassName('product-name');
        const title=text[0].textContent;
        if(title.toLowerCase().indexOf(term)==-1)
        {


            course.style.display='none';


        }
        else{
            course.style.display='block';


        }
    })



});
