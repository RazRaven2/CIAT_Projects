print('I\'m ready to begin')

#1. Write an if statement that assigns 20 to the variable y, and assigns 40 to the variable z if the variable x is greater than 100.
#Solution:
x=int(input('Enter x: '))
y=0
z=0

if x>100:
    y=20
    z=40
#Test print

print('y=' + str(y) + ' z=' + str(z) )
    
#2. Write an if statement that assigns 0 to the variable b, and assigns 1 to the variable c if the variable a is less than 10.
#Solution:
a=int(input('Enter a: '))
b=2
c=2

if a<10:
    b=0
    c=1
#Test print

print('b=' + str(b) + ' c=' + str(c))

#3. Write an if-else statement that assigns 0 to the variable b if the variable a is less than 10. Otherwise, it should assign 99 to the variable b.
#Solution:
a=int(input('Enter a: '))
b=1

if a<10:
    b=0
else:
    b=99    
#Test print

print('b=' + str(b))

#4. The following code contains several nested if-else statements. Unfortunately, it was written without proper alignment and indentation. Rewrite the code and use the proper conventions of alignment and indentation.
#Solution:
A_score = 90
B_score = 80
C_score = 70
D_score = 60

score= float(input('Please enter score: '))

if score >= A_score:
    print('Your grade is A.')
else:
    if score >= B_score:
        print('Your grade is B.')
    else:
        if score >= C_score:
            print('Your grade is C.')
        else:
            if score >= D_score:
                print('Your grade is D.')
            else:
                print('Your grade is F.')


#5. Write nested decision structures that perform the following: If amount1 is greater than 10 and amount2 is less than 100, 
#   display the greater of amount1 and amount2.
#Solution:
amount1= int(input('Please enter amount1: '))
amount2= int(input('Please enter amount2: '))

if amount1>10 and amount2<100:
    if amount1>amount2:
        print("This amount is greater: " + str(amount1))
    else:
        print("This amount is greater: "+ str(amount2))
else:
    print('Values out of bounds')
    

#6. Write an if-else statement that displays 'Speed is normal' if the speed variable is within the range of 24 to 56. 
#   If the speed variable’s value is outside this range, display 'Speed is abnormal'.
#Solution:

speed= int(input('Please enter speed: '))

if speed > 24 and speed <54:
    print('Speed is normal')
else:
    print('Speed is abnormal')
