var my_product=document.getElementsByClassName('my-product');
var home_catalog=document.getElementsByClassName('tab-link');

my_product[0].style.display="block"; 

function click_catalog(a){
    var ind=0;
    for(let i=0;i<home_catalog.length;i++){
        home_catalog[i].classList.remove('active');
        if(a==home_catalog[i]){
            ind=i;
        }
    }

    for(let i=0;i<my_product.length;i++){
        my_product[i].style.display="none";
    }

    a.classList.add('active');
    my_product[ind].style.display="block";
}

