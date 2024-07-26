#1-Write your own function named "HappyBirthday" which takes 1 (required) integer
# parameter: "year", and one (required) string parameter: "name". 
#Use the "year" input to calculate the age of the person based on the current year. 
#If the calculated age is less than 1920, print: "Error, need at least 1920 year value".
# Example: If the following arguments are passed to your "HappyBirthday" function:
# "2000 Larry", your program should print: "Happy 23rd Birthday Larry!".

import datetime

#varibles
name=input("What is your name? ")
year=int(input("What year where you born: "))

#Determines age with congratulation message
def HappyBirthday(year, name):
     year_cap=1920
     current_year = datetime.date.today().year
     age = current_year - year
     num_suffix = ['st', 'nd', 'rd', 'th']
     lastdigit = age % 10
     
     if year > year_cap:
          if lastdigit == 1:
               print(f"Happy {age}{num_suffix[0]} Birthday {name}!")
          if lastdigit == 2:
               print(f"Happy {age}{num_suffix[1]} Birthday {name}!")
          if lastdigit == 3:
               print(f"Happy {age}{num_suffix[2]} Birthday {name}!")
          if lastdigit >= 4 or lastdigit == 0:
               print(f"Happy {age}{num_suffix[3]} Birthday {name}!")
     else:
          print('Error, need at least 1920 year value')

HappyBirthday(year, name)

print("")
##Write your own function named "greeting_with_gender" that accepts two parameters: 
#"name" (string) and "gender" (string). 
#Prints a customized greeting based on the "gender" parameter:
#If "gender" is "male", print: "Hello, Mr. {name}! Welcome!", where "{name}" 
#is replaced with the value of the "name" parameter.
#If "gender" is "female", print: "Hello, Mrs. {name}! Welcome!", 
#where "{name}" is replaced with the value of the "name" parameter.
#If "gender" is anything other than "male" or "female", print: "Hello, {name}! Welcome!", 
#where "{name}" is replaced with the value of the "name" parameter.

name=input("What is your name? ")
gender=input("What is your preferred gender? ")

def greeting_with_gender(name, gender):
     if gender == "male":
          print(f"Hello, Mr. {name}! Welcome!")
     if gender == "female":
          print(f"Hello, Ms. {name}! Welcome!")
     else:
          print(f"Hello, {name}! Welcome!")

greeting_with_gender(name, gender)
