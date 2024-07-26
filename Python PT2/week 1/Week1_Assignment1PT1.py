#Write a function named "calculate_bmi" that takes two required parameters: "height" (in meters as float) and "weight" (in kilograms as float). 
#The function should calculate the BMI using the formula: BMI = weight / (height * height) and return the calculated BMI as a float.
#The function should also print a message based on the calculated BMI as follows:
#If BMI is less than 16, print: "Your BMI is {bmi:.2f}. You are severely underweight."
#If BMI is between 16 and 16.9, print: "Your BMI is {bmi:.2f}. You are underweight."
#If BMI is between 17 and 18.4, print: "Your BMI is {bmi:.2f}. You are mildy underweight."
#If BMI is between 18.5 and 24.9, print: "Your BMI is {bmi:.2f}. You have a normal weight."
#If BMI is between 25 and 29.9, print: "Your BMI is {bmi:.2f}. You are overweight."
#If BMI is between 30 and 34.9, print: "Your BMI is {bmi:.2f}. You are obese class 1 (Moderate)."
#If BMI is between 35 and 39.9, print: "Your BMI is {bmi:.2f}. You are obese class 2 (Severe)."
#If BMI is 40 or greater, print: "Your BMI is {bmi:.2f}. You are obese class 3 (Very severe or morbidly obese)."

height=float(input('Please enter height in meters: '))
weight=float(input('Please enter weight in kilograms: '))

def calculate_bmi(height, weight):
     bmi = weight / (height*height)

     if bmi < 16:
          print(f'Your BMI is {bmi:.2f}. You are severly underweight.')
     elif bmi >= 16 and bmi < 16.9:
          print(f'Your BMI is {bmi:.2f}. You are underweight.')
     elif bmi >= 17 and bmi < 18.4:
          print(f'Your BMI is {bmi:.2f}. You are mildy underweight.')
     elif bmi >= 18.5 and bmi < 24.9:
          print(f'Your BMI is {bmi:.2f}. You have a normal weight.')
     elif bmi >= 25 and bmi < 29.9:
          print(f'Your BMI is {bmi:.2f}. You are overweight.')
     elif bmi >= 30 and bmi < 34.9:
          print(f'Your BMI is {bmi:.2f}. You are obese class 1 (Moderate).')
     elif bmi > 35 and bmi < 39.9:
          print(f'Your BMI is {bmi:.2f}. You are obese class 2 (Severe)')
     else:
          print(f'Your BMI is {bmi:.2f}. You are obese class 3 (Very severe or morbidly obese)')

calculate_bmi(height, weight)
     