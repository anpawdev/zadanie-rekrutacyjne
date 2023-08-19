//
import 'bootstrap/js/dist/carousel'

const menuLink = document.querySelector('.menu-item-has-children')
const submenu = document.querySelector('.sub-menu')

menuLink.addEventListener('click', (e) => {
  e.preventDefault()
  submenu.classList.toggle('open')
})
