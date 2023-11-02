window.addEventListener('scroll', function() {
    const header = document.querySelector('#upper_nav');
  
    if (window.scrollY > 0) {
      header.classList.add('shadow');
    } else {
      header.classList.remove('shadow');
    }
  });
