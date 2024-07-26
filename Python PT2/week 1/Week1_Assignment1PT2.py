#Math quiz game

import random

def Quizzer():

     print(f'Welcome to Math Quiz!')
     x=random.randint(0,10)
     y=random.randint(0,10)
     answer= int(input(f'Question: {x} * {y} = '))
     solution = x * y
     if answer == solution:
          return True
     else: 
          return False

#main
success=Quizzer()

if success:
     print('Good Job!')
else:
     print('Better luck next time')