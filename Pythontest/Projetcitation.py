import random
import json

quotes = ["Ecoutez-moi, Monsieur Shakespeare, nous avons beau être ou ne pas être, nous sommes !","On doit pouvoir choisir entre s'écouter parler et se faire entendre."]
characters=["alvin et les Chipmunks","Babar","betty boop","calimero","casper","le chat potté","Kirikou"] 

#Read values from a Json file  
def read_value_from_json():
    values=[]
    #Open json file with the list
    with open ("characters.json") as f:
    #load all data in json file
        data = json.load(f)
        for entry in data:
            values.append(entry["character"])
        return values


def show_random_item(my_list):
    rand_numb=random.randint(0,len(my_list)-1)
    item = my_list[rand_numb]
    return item

def random_character():
    all_values=read_value_from_json()
    return show_random_item(all_values)

def capitalize(words):
    for word in words:
        word.capitalize()

def message(characters, quotes):
    capitalize(characters)
    capitalize(quotes)
    return "{} a dit : {}".format(characters,quotes)

user_answer=input ("Tapez 'entrée' pour connaître une autre citation ou 'B' pour quitter le programme")

while user_answer != "B":
    print(message(random_character(),show_random_item(quotes)))
    user_answer=input ("Tapez 'entrée' pour connaître une autre citation ou 'B' pour quitter le programme")





#if user_answer == "B":
 #   pass
#elif user_answer == "C":
 #   print("C pas la bonne reponse ! et G pas d'humour, je C...")
#else:
  #  pass
    # - show another quote

#print(show_random_quote(quotes))