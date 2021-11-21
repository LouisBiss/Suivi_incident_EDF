
var DepartObject = {
    "Baie Nettle ": {"P-Somardis": [], "Entrepot": [],"Howel Center":[],"Hopital":[],"Froston":[],"Froston":[],"Little Switzerland":[],"PPI- West Indies":[],"Marche":[],"C-Brigitte":[],"C-Fregate":[],"Aline":[],"Josie":[],"P-Royal":[],"PPI-Cochon":[],"Cabri":[],"Boeuf":[],"Mouton":[],"Giraffe":[],"P-Simson Beach":[],"C-Cheval":[],
            },
    "Baie Orientale": {"C-Gumme": [],"1i-More": [],"PPI-Les Plaines": [],"1i-Belle Plaine": [],"1i-Bloomondale": [],"C-Felix": [],"Farley": [],"Saint Georges": [],"PPI-Henry": [],"Stade": [],"Les Deux Frères": [],"C-Claudine": [],"1i-L'Embouchure": [],"Thon": [],"PPI-Bonite": [],"C-Dorade": [],"Jennie": [],"PPI-Sirene": [],"1i-Mont Celine": [],"C-Joyce": [],"1i-Mont Boeuf": [],"1i-Etang aux Poissons": [],"P-Step": [],"Daniel": [],"PPI-Barbara": [],"1i-Chambard": [],"Galion": [],"Hopehill": [],"": [],"": [],"": [],"": [],
    },
    "Grand Case": {"PPI- Anguilla": [],"1i-O'Rilley": [],"C-Gd Case": [],"1i-Eglise": [],"PPI-Gd Grand Case Ecole": [],"C-Sun and Beach": [],"Panormique": [],"First Hill": [],"PPI-Aerogare": [],"La Colline": [],"C-Green Valley": [],"Esperance 2": [],"Green Hill": [],"David Robert": [],"Echasse": [],"PPI-Heron": [],"Pisoni": [],"Petrel": [],"P-Marcel": [],"Meridien": [],"Pluvier": [],"1i-Sarcelle": [],"Roxy": [],"PPI-Pinel": [],"College": [],"C-Bellevedere": [],"Enbarcadère": [],"PPI-Terrasses de Cul de Sac": [],"Hunt": [],"Parc Vuew": [],"C-Hotel MontVernon": [],"Colibri": [],"Epervier": [],"PPI-Toucan": [],"Chevrise": [],"Cul de Sac": [],"PPI-Loic": [],"1i-Moril": [],"Cathy": [],
    },
    "Hope Estate": {"PPI-Bienvenue": [],"P-Sofrism": [],"P-Port de Commerce": [],"S-Depot Gess": [],"Arago": [],"C-Anse des Pères": [],"Batterie": [],"1i-Caparros": [],"PPI-Palmerie": [],"Mont Choisy": [],"C-Maya": [],"Michel": [],"P-Distrimart": [],"PPI-Normand": [],"Hope Estate": [],"Mont Carreta": [],"P-Dr Petit": [],"C- Mont Vernon": [],"Manchot": [],"PPI-Griselle": [],"1i-La Paix": [],"1i-Webster": [],"Catherine": [],"Vavina Bay": [],"PPI-Vacel": [],"Orient Beach": [],"Loana": [],"Yannick": [],"Margeritte": [],"Rosalie": [],"Denise": [],"S-Max": [],"Le Must": [],"Hope Hill": [],
    },
    "La Savane": {"3I Galisbay": [],"Artsen": [],"1i-Agrement": [],"Residence Agrement": [],"Scott": [],"Gripple Gate": [],"P-Manuel": [],"Laure": [],"Allen": [],"1i-Ravine": [],"1i-Alain": [],"1i-Colombier": [],"Saint Louis": [],"C-Flemming": [],"Rambaud": [],"Les Jardins de Dains": [],"PPI-Savana": [],"Paricia": [],"C-Gendarmerie": [],"Savane Activities": [],"PPI-Cite Scolaire": [],"Les Serres": [],"C-Sophy": [],"Gd Case Lagon": [],"1i-Millrum": [],"P-Cuisine Centrale": [],"PPI-Brabzi": [],"P-Dr Petit": [],"P-Carrière de Gd Case": [],"C-Esperance": [],"Esperance 2": [],
    },
    "Saint James": {"PPI-Marigot ": [],"Eboue": [],"Bache": [],"Arlette": [],"Suzanna": [],"Corvette": [],"Louisanna": [],"C-Galiotte": [],"SH-James": [],"PPI-Bellevue": [],"Saint Jean": [],"Portes de St Martin": [],"A-Anne": [],"Auto Transfo":[],
    },
    "Spring": {"PPI-Hammeau de Pont": [],"Herce Williams": [],"P-Lycée": [],"Beatrcie": [],"H-Colline Créole": [],"Leila": [],"PPI-Sucrerie": [],"Les Manguiers": [],"les Acores": [],"P-Mediathèque": [],"C-Arboretum": [],"Sapotille": [],"P-Ecalyptus": [],"1i-Colombe": [],"Jeanne": [],"Santa Monica": [],"C-Bertha": [],"Perception": [],"C-Santoise": [],"Sylvie": [],"Anaïs": [],"PPI-Village": [],"P-Frantz": [],"C-Spring": [],"Concordia": [],"Radiologie": [],
    },
    "Terres Basses": {"PPI-Juliette": [],"P-Marina": [],"1i-Lolo": [],"C-Ammandier": [],"1i-Marina Royale": [],"Pirates": [],"P-Corsaire": [],"Anse de Sables": [],"C-Pont Levis": [],"Sandy Ground": [],"Albert": [],"Beach Residence": [],"Dartagna": [],"PPI-Station de Refoulement": [],"Sandy Bay": [],"A-Venie": [],"1i-DEl Falco": [],"Baie Rouge": [],"Mont Rouge": [],"C-Cecile": [],"Gd Etang": [],"A-Burce": [],"Claude": [],"C-Lidwine": [],"1i-Acajou": [],"PPI-Hugues": [],"Douglas": [],"P-Hotel la Samana": [],"Clif": [],"C-Baylong": [],"1i-Corine": [],"1i-PPI-Ocean View": [],"1i-Plumbay": [],"C-Pte Canonnier": [],"1i-Virgine": [],"P-PPI-Glawer": [],"1i-Cassara": [],"Mathilde": [],"4Star": [],"1i-Joelle": [],"1i-Geraldine": [],
    },
}
window.onload = function() {
var DepartSel = document.getElementById("depart");
var posteSel = document.getElementById("poste");

for (var x in DepartObject) {
    DepartSel.options[DepartSel.options.length] = new Option(x, x);
}
DepartSel.onchange = function() {
    
    posteSel.length = 1;
    //display correct values
    for (var y in DepartObject[this.value]) {
    posteSel.options[posteSel.options.length] = new Option(y, y);
    }
}
posteSel.onchange = function() {
    
    //display correct values
    var z = DepartObject[DepartSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
    chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
}
}
       