let label = document.querySelectorAll(".acc")

label.forEach((e)=>{
    e.addEventListener("click", ()=>{
        removeClass()
        e.classList.toggle("active")
    })
})

function removeClass(){
    label.forEach((e)=>{
        e.classList.remove("active")
    })
}