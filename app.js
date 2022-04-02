let message = document.getElementById("alert")
message.addEventListener('click',() => {  
    alert("Pour SAUVEGARDER, entrez dans 'Save' la date d'un jour donné sous format JJ/MM/AA (ex : 12/02/99). Puis appuyez sur 'Sauvegarder'. Vous ne pouvez pas sauvegarder 2 listes sous le même nom.")
    alert("Pour CHARGER un texte, entrez dans 'Load' une date déjà enregistrée sous format JJ/MM/AA (ex : 12/02/99). Puis appuyez sur 'Reprendre To-do List'.")
})
