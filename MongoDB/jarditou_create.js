use jarditou

db.createCollection("product")

db.product.insert({ "pro_libelle" : "Aramis",
                        "pro_categorie" : "Barbecues",
                        "pro_prix" : 200,
                        "pro_couleur" : "Noir",
                        "pro_d_ajout" : new Date()
                    })