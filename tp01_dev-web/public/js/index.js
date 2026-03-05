document.querySelectorAll(".btn-details").forEach(element =>{
    element.addEventListener("click", (e) =>{
        e.preventDefault();

        let modale = document.querySelector('#weaponModal .modal-content');
        modale.innerHTML = "Chargement...";

        const href = e.currentTarget.href;

        axios.get(href).then(response => {
            console.log(response.data);
            modale.innerHTML = response.data;
        }).catch(error => {
            console.log(error);
        })
    })
})