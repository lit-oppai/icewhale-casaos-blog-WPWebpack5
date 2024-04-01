import '../sass/main.scss'

// Test import of a JavaScript module
// import { example } from '@/js/example'

// Test import of an asset
// import webpackLogo from '@/images/webpack-logo.svg'

// Test import of style
// import '../sass/main.scss'
// import '@/styles/index.scss'

// Appending to the DOM
// const logo = document.createElement('img')
// logo.src = webpackLogo

// const heading = document.createElement('h1')
// heading.textContent = example()

// Test a background image url in CSS
// const imageBackground = document.createElement('div')
// imageBackground.classList.add('image')

// Test a public folder asset
// const imagePublic = document.createElement('img')
// imagePublic.src = '/assets/example.png'

// import home from '@/pages/home.html'
// const homePageDivElement = document.createElement('div')
// homePageDivElement.innerHTML = home
//
// const app = document.querySelector('#root')
// app.append(homePageDivElement)

// init
// import header from '@/header.html'
// import sidebar from '@/sidebar.html'
// import home from '@/home.html'
//
// const body = document.querySelector('body')
// const headerElement = document.createElement('header')
// const divElement = document.createElement('div')
// const footerElement = document.createElement('footer')
// headerElement.innerHTML = header
// divElement.classList.add('body')
// divElement.innerHTML = sidebar + home
// headerElement.classList.add('header')
// // body.appendChild(headerElement, divElement, footerElement)
// body.appendChild(headerElement)
// body.appendChild(divElement)
// body.appendChild(footerElement)

// import Swiper JS
import Swiper from 'swiper'
import { Navigation, Pagination } from 'swiper/modules'
// import Swiper style
import 'swiper/css'
import 'swiper/css/pagination'

// const SWIPER = document.querySelector('.swiper')
const swiper = new Swiper('.swiper', {
	modules: [Navigation, Pagination],
	// Optional parameters
	// direction: 'vertical',
	loop: true,

	// If we need pagination
	pagination: {
		el: '.swiper-pagination'
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev'
	}

	// And if we need scrollbar
	// scrollbar: {
	//   el: '.swiper-scrollbar',
	// },
})

// const SWIPER_BUTTON_NEXT = document.querySelector('.swiper-button-next')
// const SWIPER_BUTTON_PREV = document.querySelector('.swiper-button-prev')
// SWIPER_BUTTON_NEXT.addEventListener('click', () => {
//   swiper.slideNext()
// })
// SWIPER_BUTTON_PREV.addEventListener('click', () => {
//   swiper.slidePrev()
// })

// function changeElState(enevt) {
//   console.log(enevt)
//   // debugger
// }
//
// export { changeElState }
//
// window.changeElState = changeElState

// const REF = document.querySelector('.content-ref')
// document.addEventListener('click', (event) => {
//   console.log(event)
// })

function activateDirectory() {
	const contentId = getCurrentContentId()
	if (screen.width < 1440 || !contentId) {
		return
	}

	document.querySelector(`[data-content-id = "${contentId}"]`)?.classList.add('active')

	// 根据 id 获取对应目录项
	const currentItem = document.querySelector(`[data-content-id ='${contentId}']`)

	// 移除其他目录项的激活状态
	document.querySelectorAll('.content-ref.active').forEach((item) => {
		item.classList.remove('active')
		item.classList.add('ml-10')
	})

	// 使用 currentItem 激活
	currentItem?.classList.add('active')
	currentItem?.classList.remove('ml-10')
}

function getCurrentContentId() {
	// 获取当前可视区域的id
	const contentList = document.querySelectorAll('[id^="content"]')
	if (!contentList.length) {
		return null
	}
	const contentIdList = Array.from(contentList).map((content) => {
		const contentId = content.getAttribute('id')
		const contentTop = content.getBoundingClientRect().top
		return {
			contentId,
			contentTop
		}
	})
	const contentId = contentIdList
		.filter((content) => content.contentTop > 0)
		.sort((a, b) => a.contentTop - b.contentTop)[0]?.contentId || 'content6'
	return contentId
}

activateDirectory()
window.addEventListener('scroll', activateDirectory)
document.querySelectorAll('.content-ref').forEach((item) => {
	item.addEventListener('click', (e) => {
		console.log(e)
		const target = e.target
		const contentId = target.dataset.contentId
		const realViewHeight = document.querySelector(`#${contentId}`).offsetTop - 108
		window.scrollTo({
			behavior: 'smooth',
			top: realViewHeight
		})
		activateDirectory()
	})
})

// // init header
// if (screen.width <= 375) {
//   const headerNav = document.querySelector('#header-nav')
//   headerNav.classList.add('close')
//   // add event listener
//   const headerNavButton = document.querySelector('#header-extra-button')
//   headerNavButton.addEventListener('click', () => {
//     headerNav.classList.remove('close')
//     headerNav.classList.add('open')
//   })
//   // global click event
//   document.addEventListener('click', (e) => {
//     // close menu
//     if (!e.target.closest('#header-extra-button') && !e.target.closest('#header-nav')) {
//       headerNav.classList.add('close')
//       headerNav.classList.remove('open')
//     }
//   })
// } else {
//   const headerNav = document.querySelector('#header-extra')
//   headerNav.classList.add('close')
// }

// // init search
// document.querySelector('.searchIcon').addEventListener('click', (e) => {
//   const ICON = document.querySelector('.searchIcon')
//   const INPUT = document.querySelector('.searchInput')
//   ICON.classList.add('close')
//   INPUT.classList.remove('close')
//   INPUT.focus()
// })

// // global click event
// document.addEventListener('click', (e) => {
//   // close search
//   const ICON = document.querySelector('.searchIcon')
//   const INPUT = document.querySelector('.searchInput')
//   if (!e.target.closest('.searchInput') && !e.target.closest('.searchIcon')) {
//     ICON.classList.remove('close')
//     INPUT.classList.add('close')
//   }
// })

for (let i = 1; i < 5; i++) {
	console.log(`.foo-${i}-state`, `.foo-${i}`);
	addPointerenterEventToNavMenu(`.foo-${i}-state`, `.foo-${i}`)
}
function addPointerenterEventToNavMenu(stateSeletor, menuSelector) {
	const FOO = document.querySelector(stateSeletor)
	FOO.addEventListener('pointerenter', (e) => {
		cancelNavNenu();
		document.querySelector(menuSelector).classList.remove('hidden')
	})
}
const CANCEL_NAV_TRRIGER = document.querySelector('.cancel-nav-trigger')
CANCEL_NAV_TRRIGER.addEventListener('pointerleave', (e) => {
	CANCEL_NAV_TRRIGER.querySelectorAll('div').forEach((item) => {
		item.classList.add('hidden')
	})
})
function cancelNavNenu() {
	document.querySelectorAll('.cancel-nav-trigger div').forEach((item) => {
		item.classList.add('hidden')
	})
}

// 关闭状态
let isNavPanelSwitchOn = false
function switchNavPanel() {

	if (isNavPanelSwitchOn) {
		// 打开状态
		isNavPanelSwitchOn = false
		document.querySelector('#nav_panel_switch_on').classList.add('hidden')
		document.querySelector('#nav_panel_switch_off').classList.remove('hidden')

		document.querySelector('#zima_trigger').classList.add('flex-row')
		document.querySelector('#zima_trigger').classList.remove('flex-col', 'md:flex-row')

		document.querySelector("#zima_nav").classList.add('h-0', 'opacity-0')
		document.querySelector("#zima_nav").classList.remove('h-[100vh]', 'opacity-100')

		document.querySelector("#zima_nav>li").classList.add('h-0', 'opacity-0')
		document.querySelector("#zima_nav>li").classList.remove('h-dvh', 'opacity-100')

		document.querySelectorAll("#zima_nav>li>span").forEach((item) => {
			item.classList.add('opacity-0', 'hidden')
			item.classList.remove('opacity-100', 'block')
		})
	} else {
		// 关闭状态
		isNavPanelSwitchOn = true
		document.querySelector('#nav_panel_switch_on').classList.remove('hidden')
		document.querySelector('#nav_panel_switch_off').classList.add('hidden')

		document.querySelector('#zima_trigger').classList.remove('flex-row')
		document.querySelector('#zima_trigger').classList.add('flex-col', 'md:flex-row')

		document.querySelector("#zima_nav").classList.remove('h-0', 'opacity-0')
		document.querySelector("#zima_nav").classList.add('h-[100vh]', 'opacity-100')

		document.querySelector("#zima_nav>li").classList.remove('h-0', 'opacity-0')
		document.querySelector("#zima_nav>li").classList.add('h-dvh', 'opacity-100')

		document.querySelectorAll("#zima_nav>li>span").forEach((item) => {
			item.classList.remove('opacity-0', 'hidden')
			item.classList.add('opacity-100', 'block')
		})
	}
}

document.querySelector("#nav_panel_switch").addEventListener('click', switchNavPanel)