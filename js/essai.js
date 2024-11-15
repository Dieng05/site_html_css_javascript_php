
trouve1 = false
trouve2 = false
trouve3 = false
trouve4 = false
trouvr5 = false

let boutton = document.getElementById("btn")
boutton.disabled = true
document.getElementById("adresse").addEventListener("input", insertmail)

function insertmail(e) {
    let email = e.target.value;
    let erreur = document.getElementById('erreurmail')
    if (!email.includes("@") || !email.includes(".")) {
        erreur.innerText = "saisi obligatoire"
    } else {
        erreur.innerText = ""

    }
}

document.getElementById("confadresse").addEventListener("input", insertconfadresse)

function insertconfadresse(e) {
    let confemail = e.target.value
    let erreur = document.getElementById('erreurconfmail')
    if (confemail != document.getElementById('adresse').value) {
        boutton.disabled = true
        erreur.innerText = "confirmation obligatoire"

    } else {
        erreur.innerText = ""
        trouve1 = true
    }

    if (trouve1 && trouve2 && trouve3 && trouve4 && trouve5) {
        boutton.disabled = false
        boutton.style.background = "black"
        boutton.style.color = "gray"
    }
}

document.getElementById("pass").addEventListener("input", insertpass)

function insertpass(e) {
    let passm = e.target.value;
    let erreur = document.getElementById('erreurpassword')
    if (passm.search(/[0-9]/) < 0) {
        erreur.innerText = " doit contenir au moins un chiffre"

    } else {
        erreur.innerText = ""
    }
}

document.getElementById("confpass").addEventListener("input", insertconfpass)

function insertconfpass(e) {
    let confpasse = e.target.value;
    let erreur = document.getElementById('erreurconfpassword')
    if (confpasse != document.getElementById('pass').value) {
        erreur.innerText = "Le mot de passe n'est pas conforme"

    } else {
        erreur.innerText = ""
        trouve2 = true


    }

    if (trouve1 && trouve2 && trouve3 && trouve4 && trouve5) {
        boutton.disabled = false
        boutton.style.background = "black"
        boutton.style.color = "gray"
    }
}


document.getElementById("celi").addEventListener("input", insertceli)

function insertceli(e) {
    
    let civi = document.getElementById("celi")
    let erreur = document.getElementById('erreurcivil')
    if (civi.selectedIndex == 0) {

        erreur.innerText = "Merci de selectionner une option"

    } else {
        trouve5 = true
        erreur.innerText = ""

    }

    if (trouve1 && trouve2 && trouve3 && trouve4 && trouve5) {
        boutton.disabled = false
        boutton.style.background = "black"
        boutton.style.color = "gray"
    }

}

document.getElementById("nom").addEventListener("input", insertnom)

function insertnom(e) {
    let name = e.target.value;
    let erreur = document.getElementById('erreurnom')
    if (!name) {
        erreur.innerText = "Merci de saisir"

    } else {
        erreur.innerText = ""
        trouve3 = true

    }
    if (trouve1 && trouve2 && trouve3 && trouve4 && trouve5) {
        boutton.disabled = false
        boutton.style.background = "black"
        boutton.style.color = "gray"
    }
}

document.getElementById("prenom").addEventListener("input", insertprenom)

function insertprenom(e) {
    let preno = e.target.value;
    let erreur = document.getElementById('erreurprenom')
    if (!preno) {
        erreur.innerText = "Merci de saisir"

    } else {
        erreur.innerText = ""
        trouve4 = true

    }
    if (trouve1 && trouve2 && trouve3 && trouve4 && trouve5) {
        boutton.disabled = false
        boutton.style.background = "black"
        boutton.style.color = "gray"
    }
}


