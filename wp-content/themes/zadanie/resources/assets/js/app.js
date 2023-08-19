//
import 'bootstrap/js/dist/carousel'

const menuLink = document.querySelector('.menu-item-has-children')
const submenu = document.querySelector('.sub-menu')

menuLink.addEventListener('click', (e) => {
  e.preventDefault()
  submenu.classList.toggle('open')
})

const btnSearch = document.querySelector('.btn-search')
const searchForm = document.querySelector('#searchform')

btnSearch.addEventListener('click', () => {
  btnSearch.classList.add('d-none')
  searchForm.classList.remove('d-none')
})
