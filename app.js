function openPDF() {
    var pdfLocation = 'C:\\Users\\ende\\Desktop\\Endework_Test-test.pdf';
    window.open(pdfLocation, '_blank');
  }
 

  // form
  function switchCard() {
    const loginCard = document.querySelector('.container-fluid .card:nth-child(1)');
    const registerCard = document.querySelector('.container-fluid .card:nth-child(2)');
  
    if (loginCard.style.display === 'none') {
      loginCard.style.display = 'block';
      registerCard.style.display = 'none';
    } else {
      loginCard.style.display = 'none';
      registerCard.style.display = 'block';
    }
  }
  
  
  // function myfunction(){
    //   const button = document.querySelector('#Button');
    //   window.open('form.html', '_blank');
    
  // }
  
  button.addEventListener('click', myfunction()) ;
  function myfunction(){
    const button = document.querySelectorAll('.hard_copy');
    alert( 'Our store is temporarly closed')
  }
  
  

 

