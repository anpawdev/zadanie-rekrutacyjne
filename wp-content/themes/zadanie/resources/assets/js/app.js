//
import 'bootstrap/js/dist/carousel'
import 'bootstrap/js/dist/modal'
import $ from 'jquery'
import Macy from 'macy'

// dropdown
const menuLink = document.querySelector('.menu-item-has-children')
const submenu = document.querySelector('.sub-menu')

menuLink.addEventListener('click', (e) => {
  e.preventDefault()
  submenu.classList.toggle('open')
})

// search
const btnSearch = document.querySelector('.btn-search')
const searchForm = document.querySelector('#searchform')

btnSearch.addEventListener('click', () => {
  btnSearch.classList.add('d-none')
  searchForm.classList.remove('d-none')
})

// mobile menu
const hamburger = document.querySelector('.header__hamburger')
const navigation = document.querySelector('nav')
const menuLinks = document.querySelectorAll('nav ul li a ')

hamburger.addEventListener('click', () => {
  navigation.classList.toggle('open')
  hamburger.classList.toggle('active')
  searchForm.classList.remove('d-none')
})

menuLinks.forEach(link => {
  link.addEventListener('click', () => {
    navigation.classList.toggle('open')
    hamburger.classList.remove('active')
  })
})

// gallery
document.addEventListener('DOMContentLoaded', function () {
  const macyInstance = Macy({
    container: '.gallery__wrapper',
    columns: 3,
    margin: 43,
    trueOrder: false,
    breakAt: {
      760: {
        columns: 1
      }
    }
  })
})

const btnLoadMore = document.querySelector('.btn-load-more')
const gallery = document.querySelector('.gallery__wrapper')

btnLoadMore.addEventListener('click', () => {
  navigation.classList.toggle('open')
  gallery.classList.add('gallery__wrapper--more')
  btnLoadMore.classList.add('d-none')
})

// modal
$('.open-modal').on('click', function (e) {
  e.preventDefault()
  const index = $(this).data('index')
  const imageSrc = $('.gallery__item').eq(index).find('img').attr('src')

  $('.modal-image').attr('src', imageSrc)
  $('#modal').modal('show')
})
