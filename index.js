const results = fetch("select.php")
  .then((res) => res.json())
  .then((data) => {
    insertMarin(data);
  });

function insertMarin(data) {
  //on sélection le parent
  const section = document.querySelector(".member-list");
  data.forEach((marin) => {
    //on vient créer la div qui va contenir nos marins
    //on met le marin dans la div
    const newDiv = document.createElement("div");
    newDiv.innerHTML = `<span>${marin.name}</span>`;
    newDiv.className =
      "member-item col-3 d-flex justify-content-between border m-2";

    const removeButton = document.createElement("a");
    removeButton.className = "member-delete";
    removeButton.innerHTML = `<i class="bi bi-x-circle"></i>`;
    removeButton.id = marin.ID;

    removeButton.addEventListener("click", handleRemove);

    newDiv.appendChild(removeButton);
    //on push la div dans le parent
    section.appendChild(newDiv);
  });
}

const handleRemove = (e) => {
  // je récup l'id stocké dans la balise lien
  const id = e.currentTarget.id;
  const currentDiv = e.currentTarget.parentNode;

  fetch(`delete.php?id=${id}`)
    .then((res) => res.json())
    .then((data) => {
      if (data.status === 1) {
        setTimeout(() => {
          currentDiv.textContent = "Supprimé";
        }, 500);
        setTimeout(() => {
          currentDiv.remove();
        }, 1000);
      }
    });
};
