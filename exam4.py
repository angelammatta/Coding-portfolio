# based on student dictionary, create one for yourself
# loop through the dictionary  and print your name and each of the grades under each category
# 12/14/20
# Angela Matta

# display each category with each grade in seperate line
Matta = {
     "name": "Angela",
      "homework":[90.0,98.0,95.0,100.0,93.0],
      "test": [97.0,94.0,90.0,92.0]
  }

print(Matta["name"])

print("Homework:")

for x in Matta["homework"]:
    print(x)



print("Tests")

for x in Matta["test"]:
    print(x)





