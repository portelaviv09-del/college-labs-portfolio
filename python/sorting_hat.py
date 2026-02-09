#The Sorting Hat is a magical talking hat at Hogwarts School of Witchcraft and Wizardry. The hat decides which of the four "Houses" each first-year student goes to:

#🦁 Gryffindor
#🦅 Ravenclaw
#🦡 Hufflepuff
#🐍 Slytherin


#Write a program that asks the user some questions with the int() and input() functions:

#Q1) Do you like Dawn or Dusk?
#    1) Dawn
#    2) Dusk

#If answer is equal to 1, Gryffindor and Ravenclaw both get a +1.
#Else if answer is equal to 2, Hufflepuff and Slytherin both get a +1.
#Else, output the message "Wrong input."
#Q2) When I’m dead, I want people to remember me as:
#    1) The Good
#    2) The Great
#    3) The Wise
#    4) The Bold

#If the answer is 1, Hufflepuff +2.
#Else if answer is 2, Slytherin +2.
#Else if answer is 3, Ravenclaw +2.
#Else if answer is 4, Gryffindor +2.
#Else, output the message "Wrong input."
#Q3) Which kind of instrument most pleases your ear?
#    1) The violin
#    2) The trumpet
#    3) The piano
#    4) The drum

#If the answer is 1, Slytherin +4.
#Else if the answer is 2, Hufflepuff +4.
#Else if the answer is 3, Ravenclaw +4.
#Else if the answer is 4, Gryffindor +4.
#Else, output "Wrong input."
#Lastly, print out the score for each house.


Gryffindor = 0
Ravenclaw = 0
Hufflepuff = 0
Slytherin = 0

answer_1 = int(input("""Q1. Do you like Dawn or Dusk? 
      1) Dawn 
      2) Dusk:  """))

if answer_1 == 1:
  Gryffindor += 1
  Ravenclaw += 1
  print('Gryffindor and Ravenclaw both get a +1.')

elif answer_1 == 2:
    Hufflepuff += 1
    Slytherin += 1
    print('Hufflepuff and Slytherin both get a +1.')
else:
  print('Wrong input.')

answer_2 = int(input("""Q2) When I’m dead, I want people to remember me as: 
    1) The Good
    2) The Great
    3) The Wise
    4) The Bold  """))

if answer_2 == 1:
  Hufflepuff += 2
  print('Hufflepuff +2.')
elif answer_2 == 2:
  Slytherin += 2
  print('Slytherin +2')
elif answer_2 == 3:
  Ravenclaw += 2
  print('Ravenclaw +2.')
elif answer_2 == 4:
  Gryffindor += 2
  print('Gryffindor +2.')
else:
  print('Wrong input.')

answer_3 = int(input("""Q3) Which kind of instrument most pleases your ear?
    1) The violin
    2) The trumpet
    3) The piano
    4) The drum  """))

if answer_3 == 1:
  Slytherin += 4
  print('Slytherin +4.')
elif answer_3 == 2:
  Hufflepuff += 4
  print('Hufflepuff +4.')
elif answer_3 == 3:
  Ravenclaw += 4
  print('Ravenclaw +4.')
elif answer_3 == 4:
  Gryffindor += 4
  print('Gryffindor +4.')
else:
  print('Wrong input.')

  print('Gryffindor:  ' + str(Gryffindor))
  print('Ravenclaw:  ' + str(Ravenclaw))
  print('Hufflepuff:  ' + str(Hufflepuff))
  print('Slytherin:  ' + str(Slytherin))

