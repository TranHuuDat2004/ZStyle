var diachi=document.getElementsByClassName('diachikhac')[0];
function diachikhac(){
    if(diachi.style.display=='block' ){
        diachi.style.display='none';
    }else{
        diachi.style.display='block';
    }
}
var namenhan= document.getElementsByClassName('order-form order-info')[1].children[0];
var emailnhan= document.getElementsByClassName('order-form order-info')[1].children[2];
var sdtnhan= document.getElementsByClassName('order-form order-info')[1].children[4];
var diachinhan= document.getElementsByClassName('order-form order-info')[1].children[6];
if(namenhan.value!='' || emailnhan.value!='' || sdtnhan.value!='' || diachinhan.value!=''){
    diachi.style.display='block';
}
if(diachi.style.display=='block'){
    document.getElementsByClassName('checkdiachi')[0].checked="checked";
}else{
    document.getElementsByClassName('checkdiachi')[0].checked="";
}

function thanhtoanthanhcong(){
    document.querySelectorAll(".modal")[0].classList.add('active');
  }