export default function modalHome(){
  const modalBtn = document.querySelectorAll('.js-partners-modal-btn')
  const modals = document.querySelectorAll('.partner-modal')

  modalBtn.forEach(btn => {
    btn.addEventListener('click', openModal)
  });

  modals.forEach(modal => {
    let close = modal.querySelector('.close')
    close.addEventListener('click', closeModal)
  });

  function openModal(e){
    let btnId =  e.target.dataset.card
    console.log(btnId)
  
    modals.forEach(modal => {
      let modalID =  modal.dataset.modal
  
      if(modalID === btnId){
        modal.classList.add('s-active')
      }
    });
  
  }


}



function closeModal(e){
  let thisModal = e.target.closest('.partner-modal') 

  thisModal.classList.remove('s-active')

}