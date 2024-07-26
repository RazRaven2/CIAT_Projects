#8. Tip, Tax, and Total
#Write a program that calculates the total amount of a meal purchased at a restaurant. 
#The program should ask the user to enter the charge for the food, then calculate the amounts of a 18 percent tip and 7 percent sales tax. 
#Display each of these amounts and the total.

food=float(input('Please enter the charge for food: '))
tip=.18
tax=.07

total=food*tip + food*tax + food

print('The total including 18% tip and 7% tax is: $'+str(total))


#11. Male and Female Percentages
#Write a program that asks the user for the number of males and the number of females registered in a class. 
#The program should display the percentage of males and females in the class.

females=float(input('Enter the number of women enrolled: '))
males=float(input('Enter the number of men enrolled: '))
classTotal = float(females+males)
percentFemale = (females/classTotal)*100
percentMale = (males/classTotal)*100

print('The percentage of women enrolled is: ' + str(percentFemale) + "%")
print('The percentage of men enrolled is: ' + str(percentMale) + "%")

