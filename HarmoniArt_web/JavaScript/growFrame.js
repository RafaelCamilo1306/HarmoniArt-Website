function growIframe(link){
    const perfil = document.querySelector(".divPerfil");
    const frame= document.querySelector(".home-content");
    if (link=="dados" || link=="agenda"){
        if(window.innerWidth<768){
            perfil.style.display='none';
            frame.style.border='none';
        }else{
            perfil.style.display='flex';
        }
    }else{
        perfil.style.display='flex';
    }
}
// window.addEventListener('resize', () =>{
//     const perfil = document.querySelector(".divPerfil");
//     const frame= document.querySelector(".home-content");
//     if(frame)
//     if(window.innerWidth<768){
//         perfil.style.display='none';
//         frame.style.border='none';
//     }else{
//         perfil.style.display='flex';
//     }

// });