# grade report generator based on 3 dictionaries
# 12/14/20
# Angela Matta

import math

# dictionaries, 1 for each student
lloyd = {
      "name": "Lloyd",
      "homework" : [90.0,97.0,75.0,92.0],
      "quizzes" : [88.0,40.0,94.0],
      "tests" : [75.0,90.0]
      }

alice = {
    "name": "Alice",
    "homework": [100.0,92.0,98.0,100.0],
    "quizzes": [82.0,83.0,91.0],
    "tests" : [89.0,97.0]

}

tyler = {
    "name" : "Tyler",
    "homework":[0.0,87.0,75.0,22.0],
    "quizzes" : [0.0,75.0,78.0],
    "tests": [100.0,100.0]

}

# students in list
students = [lloyd,alice,tyler]

# display each student and their scores

for student in students:
    print(student["name"])
    hw = 0
    for h in student["homework"]:
      hw+=h
    print("Homework average is:", hw/len(student["homework"]))

    qScore = 0.0
    for q in student["quizzes"]:
        qScore+=q


    print("Quizzes average is: ", format((math.ceil( (qScore/len(student["quizzes"])))),".1f") )

    tScore = 0.0
    for t in student["tests"]:
      tScore += t



    print("Tests average is ", tScore/len(student["tests"]) )
    print("-"*40)









