var header = document.querySelector('.fixmenu');
  var origOffsetY = header.offsetTop;

  function onScroll(e) {
    window.scrollY > origOffsetY ? header.classList.add('sticky') :
                                    header.classList.remove('sticky');
  }

  document.addEventListener('scroll', onScroll);