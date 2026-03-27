document.querySelectorAll(".btn-details").forEach(element =>{
    element.addEventListener("click", (e) =>{
        e.preventDefault();

        let modale = document.querySelector('#weaponModal .modal-content');
        modale.innerHTML = "Chargement...";

        const href = e.currentTarget.href;

        axios.get(href).then(response => {
            modale.innerHTML = response.data;
        }).catch(error => {
            modale.innerHTML = "Erreur lors du chargement des détails.";
        })
    })
})