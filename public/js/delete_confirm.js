   //individuo l'elemento che fa partire l'evento
   const deleteForm=document.querySelectorAll('.delete-form');
   deleteForm.forEach(form=>{
       form.addEventListener('submit',function(e){
           const title= form.getAttribute('data-comic');
         e.preventDefault();  //blocco invio del form e chiedo all'utente 
        const confirm= window.confirm(`Sei sicuro di voler eliminare ${title} ?`);
        if(confirm) this.submit();
        });
   });