# Test program for debugging
z=0.0

def func():
    x = float(input('Enter a number: '))
    y = float(input('Enter a number: '))
    return (x+y)/2

z = func()
print('The average of the two numbers you have entered is: ', z)