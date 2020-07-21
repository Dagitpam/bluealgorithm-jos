'use strict';

//   * Main JS File// Definitions
let mainHeader = document.querySelector('#main-header'),
    closeBtn = document.querySelector('.close-btn'),
    closeNavDrawer = document.querySelector('.close-nav-drawer')


// mobile navigation
console.log("Hello", closeBtn)
if (document.querySelector('.main-header')) {
    function toggleNav() {
        let navEl = document.querySelector('#mainbar'),
            toggler = document.querySelector('[data-nav-toggler]'),
            menuBtn = document.querySelector('#menu-btn'),
            closeNavDrawer = document.querySelector('.close-nav-drawer');
            menuBtn.addEventListener('click', function (e) {
            if (e.target.matches('[data-nav-toggler]')) {
                navEl.classList.contains('is-active') ? navEl.classList.remove('is-active') : navEl.classList.add('is-active');
                e.target.classList.contains('is-clicked') ? e.target.classList.remove('is-clicked') : e.target.classList.add('is-clicked');
            } else {
                navEl.classList.remove('is-active');
                toggler.classList.remove('is-clicked');
            }
        }, false);
        if (document.querySelector('.close-nav-drawer')) {
            closeNavDrawer.addEventListener('click', function (e) {
                navEl.classList.remove('is-active');
                toggler.classList.remove('is-clicked');
            });
        };
    };

    toggleNav();
}

if (document.querySelector('.tab')) {
    let resizeTimer;
    window.addEventListener('resize',  function(e){
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(function() {
        tabControl();
    }, 250);
    });
    function tabControl(){
        let tabs = document.querySelector('.tab__nav');
        if (tabs.offsetWidth > 0 && tabs.offsetHeight > 0) {
        let tabLinks = tabs.querySelectorAll('a')
            tabLinks.forEach(function (tabLink, index) {
                let indexvalue = index;
                tabLink.addEventListener("click", function(e){
                    let contents = document.querySelectorAll('.tab__content--item');
                    for (let i = 0; i < tabLinks.length; i++) {
                        tabLinks[i].classList.remove('active')  
                    }
                    for (let i = 0; i < contents.length; i++) {
                        contents[i].classList.remove('active')  
                        
                    }
                    contents.forEach (function (content, index) {
                        if (index == indexvalue) {
                            content.classList.toggle('active');
                        }
                    })
                    this.classList.toggle('active');
                    e.preventDefault()
                })
            })
            
        } else {
            let contents = document.querySelectorAll('.tab__content--item');
            contents.forEach(function (content, index)  {
                let indexvalue = index
                content.addEventListener('click', function() {
                    let tabLinks = tabs.querySelectorAll('a'),
                        items = document.querySelectorAll('.tab__content--item');
                        console.log(items);
                    for (let i = 0; i < tabLinks.length; i++) {
                        tabLinks[i].classList.remove('active')  
                    };
                    for (let i = 0; i < items.length; i++) {
                        items[i].classList.remove('active')     
                    };
                    this.classList.toggle('active');
                    tabLinks.forEach (function (tabLink, index) {
                        if (index == indexvalue) {
                            tabLink.classList.toggle('active');
                        }
                    })
                })
            });
        }
    }
    // tabControl();
}

// change label color when input as value
const inputWraps = document.querySelectorAll('.form-input');
inputWraps.forEach(function(inputWrap){
    const label = inputWrap.querySelector('.form-input__label');
    const input = inputWrap.querySelector('.input');
    input.addEventListener('input', function() {
        if (this.value && this.value.length > 0) {
            label.style.color ='#3DB54A';
            this.style.border = '1px solid #3DB54A';
        }else{
            label.style.color ='#737A91';
            this.style.border = 'none';
        }
    });
})
if (document.querySelector('.modal')) {
   const modals = document.querySelectorAll('.modal');
   modals.forEach(function(modal){
      let modalBtn = modal.querySelector('#modalBtn'),
          modalBody = modal.querySelector('#modalBody'),
          closeModal = modal.querySelector('#closeModal'),
          btnCancel = modal.querySelector('.btn--cancel');
      modalBtn.addEventListener('click', function(e) {
        modalBody.style.display = 'block'
      });
      closeModal.addEventListener('click', function(e){
         modalBody.style.display = 'none'
      });
      btnCancel.addEventListener('click', function(e){
        modalBody.style.display = 'none'
     });
      modalBody .addEventListener('click', function(e){
          if (e.target == modalBody) {
            modalBody.style.display = 'none'
          }
     })
   });
}