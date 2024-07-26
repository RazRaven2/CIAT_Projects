#This program includes answers to Week 1 assignment.

#Question 1- Enter height and assign to variable height
print('Question 1:')
height = input('Please input height: ')
print(f'The entered height is {height}')

#Question 2- Enter favorite color and assign to variable color
print('Question 2:')
color = input('Please input favorite color: ')
print(f'The entered color is {color}')

#Question 3:  Write a statement that perfoms the following operations on a, b, and c.
#No initial value given, assumed set to 0.
print('Question 3:')

a=0
b=0
c=0     #Stated in question but not mentioned in operation statements.

# Adds 2 to a and assigns the result to b
b=a+2
# Multiplies b times 4 and assigns the result to a
a=b*4
# Divides a by 3.14 and assigns the result to b
b=a/3.14
# Subtracts 8 from b and assigns the result to a
a=b-8

#Varibles are unobserved.  Printed for verification.
print(f'a = {a} b = {b} c = {c}')

#Question 4. Assume the variables result, w, x, y, and z are all integers, and that 
#w = 5, x = 4, y = 8, and z = 2. What value will be stored in result after each of the 
#following statements execute?
print('Question 4:')

w = 5
x = 4
y = 8
z = 2
result = 0

result = x + y
print(result)
result = z * 2
print(result)
result = y / x
print(result)
result = y - z
print(result)
result = w // z
print(result)

# Question 5. Write a Python statement that assigns the sum of 10 and 14 to the variable total.
print('Question 5:')
total = 10+12
print(total)

#Question 6. Write a Python statement that subtracts the variable down_payment from the 
#variable total and assigns the result to the variable due.
print('Question 6:')

down_payment = 0;
due = total - down_payment

#Question 7. Write a Python statement that multiplies the variable subtotal by 0.15 and 
#assigns the result to the variable total.
print('Question 7:')

subtotal = 1
total = subtotal * .15
print(total)

#Question 8. What would the following display?
print('Question 8:')

a = 5
b = 2
c = 3
result = a + b * c
print(result)

#Question 9. What would the following display?
print('Question 9:')

num = 99
num = 5
print(num)

#Question 12. What will the following statement display?
print('Question 12:')
print('George', 'John', 'Paul', 'Ringo', sep='@')


