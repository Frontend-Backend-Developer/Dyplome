
document.querySelector('.open').onclick=()=>{
    document.querySelector('.Popap').style.display='block';
    }
    
    document.querySelector('.ButAut').onclick=()=>{
    
    document.querySelector('.HidnAut').style.display='block';
    document.querySelector('.hidnReg').style.display='none';
    
    
    }
    document.querySelector('.ButReg').onclick=()=>{
    
    document.querySelector('.HidnAut').style.display='none';
    document.querySelector('.hidnReg').style.display='block';
    
    
    }
    
    document.querySelector('.close').onclick=()=>{
    document.querySelector('.Popap').style.display='none';
    }
    window.onclick = function(event) {
      if (event.target == document.querySelector('.Popap')) {
        document.querySelector('.Popap').style.display = "none";
      }
    }
     
    //Запрет по адресний переход, только через страницу:
    