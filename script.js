function scrollEvents(amount){
    const container=document.querySelector('.myRegEvents');
    container.scrollBy({
        left:amount,
        behavior:'smooth'
    });
}