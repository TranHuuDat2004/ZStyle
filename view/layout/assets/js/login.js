function anmatkhau(){
    document.getElementsByClassName('hien')[0].classList.toggle('fa-eye-slash');
    if(document.getElementsByClassName('login-password')[0].getElementsByTagName('input')[0].type=='password')
        document.getElementsByClassName('login-password')[0].getElementsByTagName('input')[0].type='text';
    else
        document.getElementsByClassName('login-password')[0].getElementsByTagName('input')[0].type='password';
  }
  function anmatkhau1(){
    document.getElementsByClassName('hien')[1].classList.toggle('fa-eye-slash');
    if(document.getElementsByClassName('login-password')[1].getElementsByTagName('input')[0].type=='password')
        document.getElementsByClassName('login-password')[1].getElementsByTagName('input')[0].type='text';
    else
        document.getElementsByClassName('login-password')[1].getElementsByTagName('input')[0].type='password';
  }