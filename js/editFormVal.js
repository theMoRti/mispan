function getValues(){
    /*Get elements by their ID*/
    var n = document.getElementById('Name'); 
    var e = document.getElementById('Email'); 


    /*Get the values of elements*/
    var Name = n.value;
    var Email = e.value;

    /*Checking for errors*/
    var checkEmail = Email.split('@');
    if(Name == ''){

        document.getElementById('Error').innerHTML = 'Name is empty';
        document.getElementById('Error').style.display = 'block';
        document.getElementById('Name').style.backgroundColor = '#FFC5B8';


    }
    else if(checkEmail.length < 2){

        document.getElementById('Error').innerHTML = 'The Email is not correct';
        document.getElementById('Error').style.display = 'block';
        document.getElementById('Email').style.backgroundColor = '#FFC5B8';
        
    }else{
        document.getElementById('Error').style.backgroundColor = 'green';
        document.getElementById('Error').innerHTML = 'Information has been edited.'
        document.getElementById('Name').style.backgroundColor = '#FFFFFF';
        document.getElementById('Email').style.backgroundColor = '#FFFFFF';

    }



}