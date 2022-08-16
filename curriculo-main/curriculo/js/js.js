/*=================== Mostrar menu ====================*/
const showMenu = (toggleId, navid)=>{
    const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navid)

// valida que as variaveis existem //
if(toggle && nav){
    toggle.addEventListener('click', ()=>{
        nav.classlist.toggle('show-menu')
        })
    }
}    
showMenu('nav-toggle','nav-menu')

/*================== Remover Menu MObile ==================*/
const navLink = document.querySelectorAll('.nav__link')

function linkAction(){
    const navMenu = document.getElementById('nav-menu')
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))
/*==================== sessões de scroll link ativo ==================*/
const sections = document.querySelectorAll('section[id]')

function scrollActive(){
    const scrollY = window.pageYOffset

    sections.forEach(current =>{
        const sectionHeight = current.offsetHeight
        const sectionTop = current.offsetTop - 50;
        sectionId = current.getAttribute('id')

        if(scrollY > sectionTop && scrollY <= sectionTop + sectionHeight){
            document.querySelector('.nav__menu a [href*='+ sectionId + ']').classlist.remove('active-link')

        }
    })
}
window.addEventListener('scroll', scrollActive)
/*===================== Mostrar Scroll top ========================*/
function scrollTop(){
    const scrollTop = document.getElementById('scroll-top');
} //when the scroll is higher than 560 viewport height, add the show-scroll class to the a tag with the scroll-top class//
if(this.scrolly >= 200) scrollTop.classList.add('show-scroll'); else scrollTop.classlist.remove('scroll', scrollTop)
/*======================== Tema escuro ou claro =======================*/
const themeButton = document.getElementById('theme-button')
const darktheme = 'dark-theme'
const iconTheme = 'bx-sun'
// previously selected topic (if user selected)
const selectedTheme = localStorage.getItem('selected-theme')
const selectedicon = localStorage.getItem('selected-icon')
//we obtain the current theme that the interfaces has by validating the dark-theme class//
const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
const getCUrrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'
//we validate if the use previously chose a topic//
if (selectedTheme) {
    //if the validation is fullfilled, we ask what the issue was to know if we activated or deactivated the dark//
    document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
    themeButton.classList[selectedicon === 'bx-moon' ? 'add' : 'remove'](iconTheme)
}
//Activate/ deactivate the theme manually with the button//
themeButton.addEventListener('click', ()=>{
    //add or remove the dark/ icon theme//
    document.body.classList.toggle(darkTheme)
    themeButton.classList.toggle(iconTheme)
    //we save the theme and the current icon that the user chose// 
 localStorage.setItem('selected-theme', getCurrentTheme())
 localStorage.setItem('selected-icon', getCurrentIcon())
})
/*=============================== Remover o tamanho quando o curriculo e baixado============================*/
function removeScale(){
    document.body.classlist.remove('scale-cv')
}
/*========================Gerar PDF ======================*/
// PDF generated area//
let areaCV = document.getElementById('area-cv')

let resumeButton = document.getElementById('resume-button')
// htm12pdf options//
let opt ={
    margin:           0,
    filename:        'CVDUDU_aBD-V1.pdf',
    Image:           { type: 'jpeg', quality: 1.00},
    html2canvas:     { scale: 4},
    jsPDF:           {format: 'a4', orientation: 'portrait'}  
}
//Function to call areaCV and html2pdf options
function generateResume(){
    html2pdf(areaCV, opt)
}
//quando o botão é pressionado, ira executar as três funções:
resumeButton.addEventListener('click', () =>{
    //1. A calsse .sclae-sv é adicionada ao corpo, que reduz o tamanho dos elementos
    scaleCv()
    //2.the PDF is generated
    generateResume()
    //3.the .scale-cv class is removed from the body after 5 seconds to return to normal size.
    setTimeout(removeScale, 2000)
})