
##Write a statement that determines whether the variable is outside the range of 9 to 51. 
#If the variable’s value is outside this range it should display “Invalid points.” 
#Otherwise, it should display “Valid points.”

num1 = int(input('Enter an integer for point validation: '))

if num1 >9 and num1 <51: #Determine vaild or invalid points
    print('Valid points.')
else:
    print('Invalid points.')
    
#Write an if statement that assigns 0 to x if y is equal to 20.

num_x = 1
num_y = int(input('Enter an integer for "y": '))

if num_y == 20:
    num_x = 0
    print(f'x= {num_x}')
else:
    num_x = 1
    print(f'x= {num_x}')
    

#Write an if statement that assigns 0.2 to commissionRate if sales is greater than or equal to 10000.

commissionRate = 0
sales = float(input('Enter total sales : $'))
sale_goal = 1000

if sales >= sale_goal:
    commissionRate = 0.2
else:
    commissionRate = 0

commission = commissionRate * sales
print(f'Your commission is: ${commission:.2f} ')

#Write an if statement that displays the message “The number is valid” if the value referenced by speed is within the range 0 through 200.

speed = float(input('Enter a speed for validation: '))

if speed >0 and speed <200: #Determine vaild or invalid points
    print('The number is valid')
else:
    print('The number is invalid')

#Write an if statement that displays the message “The number is not valid” if the value referenced by speed is outside the range 0 through 200.

speed = float(input('Enter a speed for validation: '))

if speed <0 or speed >200: #Determine vaild or invalid points
    print('The number is not valid')
else:
    print('The number is valid')