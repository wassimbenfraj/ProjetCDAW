

var list=document.querySelector('#listname');


var searchBar =document.forms['search'].querySelector('input');


var courses=list.getElementsByClassName('col');

searchBar.addEventListener('keyup',function(e){
    var term=e.target.value.toLowerCase();

    Array.from(courses).forEach(function(course){
        var text=course.getElementsByClassName('product-name');
        var title=text[0].textContent;
        if(title.toLowerCase().indexOf(term)==-1)
        {
            course.style.display='none';

        }
        else{
            course.style.display='block';

        }
    })


});
