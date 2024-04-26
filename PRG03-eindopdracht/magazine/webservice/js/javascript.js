window.addEventListener('load', init);
let guides;
let close;
let buttons;
let detailsPopUp
let items = [];
let url = 'siegeDetails.php';


function init() {
    getSiegeData()
    guides = document.getElementById('guides');
    guides.addEventListener('click', detailsButtonHandler);
    buttons = document.getElementsByTagName('button');
    close = document.getElementById('close');
    close.addEventListener('click', closeDetails);
    window.addEventListener('beforeunload', handleBeforeUnload);

}

function handleBeforeUnload(event) {
    const confirmationMessage = 'see you later or stay a bit longer.';

    event.preventDefault();
    event.returnValue = confirmationMessage;

    // Toon een waarschuwingsbericht aan de gebruiker
    return confirmationMessage;
}

function getSiegeData() {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error("Oops something went wrong");
            }
            return response.json();
        })
        .then(data => {
            console.log("Guide information:");
            guides = document.getElementById('guides');
            data.forEach(guide => {
                console.log(guide.name);
                createGuides(guide);
            });
        })
        .catch(errorHandler)
}

function getSiegeDetails() {
    console.log(urlDetails);
    fetch(urlDetails)
        .then(response => {
            if (!response.ok) {
                throw new Error("Oops something went wrong with the details");
            }
            return response.json();
        })
        .then(data => {
            fillDetailsPopUp(data);
        })
        .catch(errorHandler);
}

function createGuides(guide) {
    const divElement = document.createElement("div");
    divElement.classList.add("guide");
    divElement.id = guide.id;
    divElement.dataset = guide.id;

    const h2Element = document.createElement("h2");
    h2Element.innerText = guide.name;

    const imgElement = document.createElement("img");
    imgElement.src = `./img/${guide.image}`;

    const addButton = document.createElement("button");
    addButton.classList.add("add");ee
    addButton.textContent = "Add to Favorites";

    const removeButton = document.createElement("button");
    removeButton.classList.add("remove");
    removeButton.textContent = "Remove as favorite";

    const detailsButton = document.createElement("button");
    detailsButton.classList.add("details");
    detailsButton.textContent = "Details";

    divElement.append(h2Element);
    divElement.append(imgElement);
    divElement.append(addButton);
    divElement.append(removeButton);
    divElement.append(detailsButton);
    guiedes.append(divElement);
    checkStorage()
}

function detailsButtonHandler(e) {
    e.preventDefault();
    let clickedButton = e.target;
    if (e.target.className === "details") {
        let guide = clickedButton.parentElement;
        let guideId = guide.id;
        let text = guide.getElementsByTagName("h2")[0].innerHTML
        detailsPopUp = document.getElementById('detailsPopUp')


            detailsPopUp.style.display = 'flex';
            let name = document.querySelector('#detailsPopUp h2')
            name.innerHTML = text;
            urlDetails = 'siegeDetails.php?id=' + guideId
            window.scrollTo(0, 0);
            getSiegeDetails()

    }
    if (e.target.className === "add"){

        let guide = e.target.parentNode
        let guideId = guide.id
        console.log(guideId)
        items.push(guideId);
        localStorage.setItem("all-favorites", JSON.stringify(items))
        changeBackground(guideId)
    }
    if (e.target.className === "remove"){

        let guide = e.target.parentNode
        let guideId = guide.id
        items = JSON.parse(localStorage.getItem("all-favorites"));
        let index = items.indexOf(guideId);
        items.splice(index, 1);
        localStorage.setItem("all-favorites", JSON.stringify(items))
        removeBackground(guideId)
    }
}

function fillDetailsPopUp(data) {
    detailsPopUp = document.getElementById('detailsPopUp');
    let operator = document.getElementsByTagName('p')[0]
    operator.innerText = data.operator
    let rarity = document.getElementsByTagName('p')[1]
    rarity.innerText = data.rarity
    let availability = document.getElementsByTagName('p')[2]
    availability.innerText = data.availability
    let bundle = document.getElementsByTagName('p')[3]
    bundle.innerText = data.bundle
    let season = document.getElementsByTagName('p')[4]
    season.innerText = data.season
}

function checkStorage() {
    let stored = localStorage.getItem("all-favorites")
    if (stored) {
        items = JSON.parse(stored)
    }
    for (let item of items) {
        changeBackground(item)
    }
}

function errorHandler(error) {
    console.log(error.message)
}


function changeBackground(item) {
    let allGuides = document.querySelectorAll(".guide");
    for (let j = 0; j < allGuides.length; j++) {
        if (item === allGuides[j].dataset.id) {
            allGuides[j].classList.add("favorite");
        }
    }e
}
function removeBackground(item) {
    let guideItem = document.getElementById(item);
        guideItem.classList.remove("favorite");
}

function closeDetails() {
        detailsPopUp.style.display = 'none';

}
