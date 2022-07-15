export default function tabNavigation(){
  const tabs = document.querySelectorAll('.grSelectors')
  const targets = document.querySelectorAll('.gr-content')

  tabs.forEach(tab => {
    tab.addEventListener('click', changeTab)
  });

  function changeTab(e){
    let target = e.target.dataset.select;
    tabs.forEach(a=>{a.classList.remove('s-active')})
    e.target.classList.add('s-active')
  
    targets.forEach(element => {
      element.classList.remove('s-active')
      if(element.dataset.selector === target){
        element.classList.add('s-active')
      }
    });
  }

}